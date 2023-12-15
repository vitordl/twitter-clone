<?php

namespace App\Livewire;

use Livewire\Component;

class ListenTest extends Component
{

    protected $listeners = ['echo:like-channel,LikeEvent' => 'liked'];

    
    public function render()
    {
        return view('livewire.listen-test');
    }

    public function liked(){
        dd('oi!');
    }
}
