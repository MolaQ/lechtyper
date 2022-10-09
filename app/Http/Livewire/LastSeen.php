<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class LastSeen extends Component
{
    public function render()
    {
        $users = User::orderBy('updated_at', 'DESC')
        ->limit(5)
        ->get();
        dd($users);
        return view('livewire.last-seen');
    }
}
