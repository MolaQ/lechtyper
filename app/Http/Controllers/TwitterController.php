<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Abraham\TwitterOAuth\TwitterOAuth;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class TwitterController extends Controller
{
    public function connect_twitter(Request $request)
    {

        $callback = '';
        $connection = new TwitterOAuth(env('TWITTER_ID'), env('TWITTER_SECRET'));

        $request_token = $connection->oauth('oauth/request_token', array('oauth_callback' => env('OAUTH_CALLBACK')));

        $url = $connection->url('oauth/authorize', array('oauth_token' => $request_token['oauth_token']));

        // $content = $connection->get("account/verify_credentials");
        // dd($content);
        return redirect($url);
    }

    public function twitter_callback(Request $request)
    {
        if ($request['denied']) return redirect(route('home'));



        $oauth_token = $request['oauth_token'];
        $oauth_verifier = $request['oauth_verifier'];

        $connection = new TwitterOAuth(env('TWITTER_ID'), env('TWITTER_SECRET'), $oauth_token, $oauth_verifier);
        $token = $connection->oauth('oauth/access_token', array('oauth_verifier' => $oauth_verifier));


        $oauth_token = $token['oauth_token'];
        $oauth_token_secret = $token['oauth_token_secret'];

        session(['access_token' => $oauth_token]);
        session(['access_token_secret' => $oauth_token_secret]);

        $connection = new TwitterOAuth(env('TWITTER_ID'), env('TWITTER_SECRET'), $oauth_token, $oauth_token_secret);

        $content = $connection->get("account/verify_credentials");
        //dd($content);
        $user = User::firstOrNew(['id_str' => $content->id_str]);
        $user->id_str = $content->id_str;
        $user->name = $content->name;
        $user->screen_name = $content->screen_name;
        $user->description = $content->description;
        $user->followers_count = $content->followers_count;
        $user->friends_count = $content->friends_count;
        $user->profile_image_url = $content->profile_image_url;


        $fileContent = file_get_contents($content->profile_image_url);
        $name = $content->id_str .'.png';
        Storage::disk('public')->put($name, $fileContent);
        // ŚCXIEŻKA LOKALNA DO PLIKU
        //$user->profile_image_url = 'storage/' . $name;
        $user->profile_image_url = $content->profile_image_url;
        $user->save();
        $user->touch();
        $r = Role::where('title', 'pending')->pluck('id')->toArray();
        if ($user->roles->count()==0) $user->roles()->sync($r);;


        // $timeline = $connection->get("statuses/user_timeline", ["screen_name" => "LechTYPER"]);
        // dd($timeline);
        //$statues = $connection->post("statuses/update", ["status" => "testing API in progress..."]);

        // $user = User::where('id', 1)->first();


        Auth::login($user);


        return redirect('/');
    }
    public function logout()
    {

        if (Auth::check()) Auth::logout();
        session()->flush();
        return redirect('/');
    }
}
