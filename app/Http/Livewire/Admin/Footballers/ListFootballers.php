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

        $this->dispatchBrowserEvent('hide-form', ['message' => 'Piłkarz dodany pomyślnie!']);

        return redirect()->back();
    }

    public function render()
    {
        $footballers = Footballer::all();
        return view('livewire.admin.footballers.list-footballers', [
            'footballers' => $footballers,
        ]);
    }
}
