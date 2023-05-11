<?php

namespace App\Http\Livewire;

use Abraham\TwitterOAuth\TwitterOAuth;
use Livewire\Component;

class Tweet extends Component
{
    public $message="";
    public $tweet = null;
    public $data = null;
    public $connection;

public function message($text)
{
    $this->message = $text;
}

public function postTweet()
{

    $token = session('access_token'); // pobranie tokena dostępowego z sesji lub bazy danych
    $secret = session('access_token_secret'); // pobranie tajnego tokena dostępowego z sesji lub bazy danych

    $connection = new TwitterOAuth(env('TWITTER_ID'), env('TWITTER_SECRET'), $token, $secret);
    $connection->post("statuses/update", ["status" => $this->tweet." #LechTYPER"]); // wysłanie tweeta



    $this->reset('tweet');

}
    public function render()
    {

        return view('livewire.tweet');
    }
}
