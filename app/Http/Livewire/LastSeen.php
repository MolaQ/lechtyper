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
        return view('livewire.last-seen');
    }
}
