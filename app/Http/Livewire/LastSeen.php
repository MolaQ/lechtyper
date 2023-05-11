<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class LastSeen extends Component
{
    public $users=[];

    public function render()
    {
        $this->users = User::orderBy('updated_at', 'DESC')
            ->limit(12)
            ->get();

        return view('livewire.last-seen');
    }
}
