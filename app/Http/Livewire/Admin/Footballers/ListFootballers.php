<?php

namespace App\Http\Livewire\Admin\Footballers;

use Livewire\Component;

class ListFootballers extends Component
{
    public $state = [];
    public function addNew()
    {
        $this->dispatchBrowserEvent('show-form');
    }

    public function createFootballer()
    {
        dd($this->state);
    }
    public function render()
    {
        return view('livewire.admin.footballers.list-footballers');
    }
}
