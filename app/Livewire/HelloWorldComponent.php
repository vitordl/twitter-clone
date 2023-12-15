<?php

namespace App\Livewire;

use App\Jobs\HelloWorldJob;
use Livewire\Component;

class HelloWorldComponent extends Component
{


    public function dispatchJob()
    {
        HelloWorldJob::dispatch()->onQueue('hello-world');

        session()->flash('message', 'Queue Job dispatched!');
    }

    
    public function render()
    {
        return view('livewire.hello-world-component');
    }
}
