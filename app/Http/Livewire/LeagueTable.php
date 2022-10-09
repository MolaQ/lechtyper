<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LeagueTable extends Component
{
    public function render()
    {
        return view('livewire.league-table')
        ->layout('components.app')
        ->slot('content');
    }
}
