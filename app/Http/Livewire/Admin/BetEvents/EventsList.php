<?php

namespace App\Http\Livewire\Admin\BetEvents;

use App\Models\BetEvent;
use Livewire\Component;

class EventsList extends Component
{
    public $state = [];

    public function addNew()
    {
        $this->state = [];
        $this->dispatchBrowserEvent('show-form');
    }


    public function render()
    {
        $betevents = BetEvent::all();
        return view('livewire.admin.bet-events.events-list', [
            'betevents' => $betevents,
        ]);
    }
}
