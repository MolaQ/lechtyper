<?php

namespace App\Http\Livewire\Admin\Calendar;

use App\Http\Livewire\Admin\AdminComponent;

class ListEvents extends AdminComponent
{
    public function render()
    {
        return view('livewire.admin.calendar.list-events');
    }
}
