<?php

namespace App\Http\Livewire\Admin\BetEvents;

use App\Models\BetEvent;
use App\Models\BetEventDetail;
use App\Models\Footballer;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class EventsList extends Component
{
    public $state = [];
    public $betEvent;
    public $betEventDetails = [];
    public $form2 = [];
    public $showEditModal = false;


    public function addNew()
    {
        $this->state = [];
        $this->dispatchBrowserEvent('show-form');
    }

    public function edit(BetEvent $betEvent)
    {
        $this->showEditModal = true;

        $this->betEvent = $betEvent;
        $this->state = $betEvent->toArray();

        $this->dispatchBrowserEvent('show-form');
    }

    public function addBetDetails(BetEvent $betEvent)
    {
        $activeFootballers = Footballer::where('status', 'active')->pluck('id')->toArray();
        foreach ($activeFootballers as $activeFootballer) {
            BetEventDetail::updateOrCreate(
                ['betevent_id' => $betEvent->id, 'footballer_id' => $activeFootballer]
            );
        }
        $this->betEventDetails = BetEventDetail::with('betEvent', 'footballer')->where('betevent_id', $betEvent->id)->whereIn('footballer_id', $activeFootballers)->get();
        $this->dispatchBrowserEvent('show-form2', ['message' => 'Lista piłkarzy zaktualizowana!']);
    }

    public function createBetEvent()
    {
        $data = Validator::make($this->state, [
            'name' => 'required',
            'hashtag' => 'required',
            'datetime' => 'date_format:"Y-m-d H:i:s"|required',
            'homescore' => 'integer|gte:0|nullable',
            'awayscore' => 'integer|gte:0|nullable',

        ])->validate();

        BetEvent::create($data);

        $this->dispatchBrowserEvent('hide-form', ['message' => 'Spotkanie dodane pomyślnie!']);
    }

    public function updateBetEvent()
    {
        $data = Validator::make($this->state, [
            'name' => 'required',
            'hashtag' => 'required',
            'datetime' => 'date_format:"Y-m-d H:i:s"|required',
            'homescore' => 'integer|gte:0|nullable',
            'awayscore' => 'integer|gte:0|nullable',
            //'email' => 'required||email|unique:users,email' . $this->user->id,
        ])->validate();

        // if (!empty($data['password'])) {
        //     $data['password'] = bcrypt($data['password']);
        // }

        $this->betEvent->update($data);

        $this->dispatchBrowserEvent('hide-form', ['message' => 'Dane spotkania zaktualizowano!']);
    }

    public function updateBetEventDetails()
    {
        dd("update results");
    }

    public function render()
    {
        $betevents = BetEvent::all();
        return view('livewire.admin.bet-events.events-list', [
            'betevents' => $betevents,
        ]);
    }
}
