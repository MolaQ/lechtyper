<?php

namespace App\Http\Livewire;

use App\Models\Footballer;
use Livewire\Component;

class Usercounter extends Component
{
    public function render()
    {

        return view('livewire.usercounter', [
            'counter' => Footballer::count(),
        ]);
    }
}
