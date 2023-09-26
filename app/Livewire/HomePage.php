<?php

namespace App\Livewire;

use Livewire\Component;

class HomePage extends Component
{
    public $alertMessage;
    public $alertDuration = 5000;



    public function render()
    {
        $this->alertMessage = 'Akcja została zakończona sukcesem!';
        return view('livewire.home-page');
    }
}
