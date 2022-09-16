<?php

namespace App\Http\Livewire\Admin\Footballers;

use App\Models\Footballer;
use Illuminate\Support\Facades\Validator;
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
        $data = Validator::make($this->state, [
            'name' => 'required',
            'surname' => 'required',
            'number' => 'integer|required',
            'position' => 'required',
            'status' => 'required',
        ])->validate();

        Footballer::create($data);

        return redirect()->back();
    }

    public function render()
    {
        return view('livewire.admin.footballers.list-footballers');
    }
}
