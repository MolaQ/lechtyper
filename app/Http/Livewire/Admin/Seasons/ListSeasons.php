<?php

namespace App\Http\Livewire\Admin\Seasons;

use App\Models\Season;
use Livewire\Component;

class ListSeasons extends Component
{

    public function addNew()
    {
        dd("addNew");
    }

    public function edit(Season $season)
    {
        dd($season);
    }


    public function render()
    {
        $seasons = Season::all();
        return view('livewire.admin.seasons.list-seasons', [
            'seasons' => $seasons,
        ]);
    }
}
