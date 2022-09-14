<?php

namespace App\Http\Livewire\Admin\Footballers;

use Livewire\Component;

class ListFootballers extends Component
{
    public function addNew()
    {
        $this->dispatchBrowserEvent('show-form');
    }
    public function render()
    {
        return view('livewire.admin.footballers.list-footballers');
    }
}
