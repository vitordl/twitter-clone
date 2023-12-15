<?php

namespace App\Livewire;

use Livewire\Component;

class ListenWebsocket extends Component
{

    public array $items = [];

    

    
    public function render()
    {
        return view('livewire.listen-websocket');
    }

    
}
