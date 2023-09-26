<?php

namespace App\Livewire\Admin;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {

        return view('livewire.admin.dashboard')->layout('components.admin.layouts.app');
    }
}
