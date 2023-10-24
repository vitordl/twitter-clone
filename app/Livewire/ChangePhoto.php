<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class ChangePhoto extends Component
{
    public $showModal = false;
    public $photo;

    use WithFileUploads;
    
    public function render()
    {
        return view('livewire.change-photo');
    }

    public function openModalChangePhoto(){
        $this->showModal = true;
    }

    public function storagePhoto(){

        $this->validate([
            'photo' => 'required|image|max:1024'
        ]);

        $nameFile = rand(10000,99999999).'.png';

        $saved = $this->photo->storeAs('users', $nameFile);

        if($saved){
            auth()->user()->update([
                'profile_photo_path' => $saved
            ]);
        }
        
        return redirect()->route('dashboard');
    }

    
}
