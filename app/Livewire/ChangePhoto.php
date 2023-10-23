<?php

namespace App\Livewire;

use Livewire\Component;

class ChangePhoto extends Component
{
    public $showModal = false;
    
    public function render()
    {
        return view('livewire.change-photo');
    }

    public function openModalChangePhoto(){
        $this->showModal = true;
    }

    
}
