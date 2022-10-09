<?php

namespace App\Http\Livewire\Admin\Seasons;

use App\Models\Season;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class ListSeasons extends Component
{
    public $state = [];
    public $showEditModal = false;
    public $season;

    public function addNew()
    {
        $this->state = [];
        $this->showEditModal = false;
        $this->dispatchBrowserEvent('show-form');
    }

    public function createSeason()
    {
        $data = Validator::make($this->state, [
            'nr' => 'required',
            'name' => 'required',
        ])->validate();

        Season::create($data);

        $this->dispatchBrowserEvent('hide-form', ['message' => 'Sezon utworzony!']);
    }



    public function edit(Season $season)
    {
        $this->showEditModal = true;

        $this->season = $season;
        $this->state = $season->toArray();

        $this->dispatchBrowserEvent('show-form');
    }

    public function updateSeason()
    {
        $data = Validator::make($this->state, [
            'nr' => 'required',
            'name' => 'required',
        ])->validate();

        // if (!empty($data['password'])) {
        //     $data['password'] = bcrypt($data['password']);
        // }

        $this->season->update($data);

        $this->dispatchBrowserEvent('hide-form', ['message' => 'Dane sezonu zaktualizowane pomyślnie!']);
    }

    public function render()
    {
        $seasons = Season::all();
        return view('livewire.admin.seasons.list-seasons', [
            'seasons' => $seasons,
        ]);
    }
}
