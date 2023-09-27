<?php

namespace App\Livewire\Admin\Events;

use Abraham\TwitterOAuth\TwitterOAuth;
use Livewire\Component;

class ListEvents extends Component
{
    public $oauth_token;
    public $oauth_token_secret;
    public function render()
    {
//         session(['access_token' => $this->oauth_token]);
//         session(['access_token_secret' => $this->oauth_token_secret]);
//         $connection = new TwitterOAuth(env('TWITTER_ID'), env('TWITTER_SECRET'), $this->oauth_token, $this->oauth_token_secret);
//         $connection->setApiVersion('2');
//         $status = $connection->post(

//             "statuses/update", [

//                 "status" => "Testing API...."

//             ]

//         );
// dd($connection);

        return view('livewire.admin.events.list-events')->layout('components.admin.layouts.app');
    }
}
