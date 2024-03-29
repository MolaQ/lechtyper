<?php

namespace App\Livewire\Admin\Events;

use Abraham\TwitterOAuth\TwitterOAuth;
use App\Models\BetEvent;
use DateTime;
use Livewire\Component;

class ListEvents extends Component
{
    public $search;
    public $showAddModal = false;
    // public $oauth_token;
    // public $oauth_token_secret;

    public $date;

    public function openAddEventModal()
    {
        $this->dispatchBrowserEvent('openAddModal');
    }

    public function openAddItemEventModal()
    {
        $this->dispatchBrowserEvent('openAddItemEventModal');
    }

    public function render()
    {
        // $this->oauth_token = session('access_token');
        // $this->oauth_token_secret = session('access_token_secret');

        //$connection = new TwitterOAuth(env('TWITTER_ID'), env('TWITTER_SECRET'), $this->oauth_token, $this->oauth_token_secret);

        // //$connection->setApiVersion('2');

        // $status = $connection->post('statuses/update', ['status' => 'To jest mój pierwszy tweet z Laravel!']);
        $events = BetEvent::all();
        return view('livewire.admin.events.list-events', [
            'events' => $events,
        ])->layout('components.admin.layouts.app');
    }
}
