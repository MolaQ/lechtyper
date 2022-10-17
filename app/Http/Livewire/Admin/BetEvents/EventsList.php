<?php

namespace App\Http\Livewire\Admin\BetEvents;

use App\Models\BetEvent;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class EventsList extends Component
{
    public $state = [];
    public $showEditModal = false;

    public function addNew()
    {
        $this->state = [];
        $this->dispatchBrowserEvent('show-form');
    }

    public function edit(Request $request)
    {
        dd($request);
    }

    public function createBetEvent()
    {
        $data = Validator::make($this->state, [
            'name' => 'required',
            'hashtag' => 'required',
            'datetime' => 'required',
            'homescore' => 'integer|gte:0|required',
            'awayscore' => 'integer|gte:0|required',
        ])->validate();

        BetEvent::create($data);

        $this->dispatchBrowserEvent('hide-form', ['message' => 'Spotkanie dodane pomyślnie!']);
    }


    public function render()
    {
        $betevents = BetEvent::all();
        return view('livewire.admin.bet-events.events-list', [
            'betevents' => $betevents,
        ]);
    }
}
