<?php

namespace App\Http\Livewire\Admin\Footballers;

use App\Models\Footballer;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithPagination;

class ListFootballers extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $state = [];
    public $showEditModal = false;
    public $footballer;
    public $footballerIdBeingRemoved = null;

    public function addNew()
    {
        $this->state = [];
        $this->showEditModal = false;
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

    public function edit(Footballer $footballer)
    {
        $this->showEditModal = true;

        $this->footballer = $footballer;
        $this->state = $footballer->toArray();

        $this->dispatchBrowserEvent('show-form');
    }

    public function updateFootballer()
    {
        $data = Validator::make($this->state, [
            'name' => 'required',
            'surname' => 'required',
            'number' => 'integer|required',
            'position' => 'required',
            'status' => 'required',
            //'email' => 'required||email|unique:users,email' . $this->user->id,
        ])->validate();

        // if (!empty($data['password'])) {
        //     $data['password'] = bcrypt($data['password']);
        // }

        $this->footballer->update($data);

        $this->dispatchBrowserEvent('hide-form', ['message' => 'Dane piłkarza zaktualizowane pomyślnie!']);

        return redirect()->back();
    }

    public function confirmFootballerRemover($footballerId)
    {
        $this->footballerIdBeingRemoved = $footballerId;
        $this->dispatchBrowserEvent('show-delete-modal');
    }

    public function deleteFootballer()
    {
        $footballer = Footballer::findOrFail($this->footballerIdBeingRemoved);
        $footballer->delete();
        $this->dispatchBrowserEvent('hide-delete-modal', ['message' => 'Piłkarz usunięty pomyślnie!']);
    }
    public function render()
    {
        $footballers = Footballer::latest()->paginate(10);
        return view('livewire.admin.footballers.list-footballers', [
            'footballers' => $footballers,
        ]);
    }
}
