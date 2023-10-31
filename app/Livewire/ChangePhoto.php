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

       
        // $user = User::where('id', auth()->user()->id)->first();
        // dd($user->id);
   

        $this->validate([
            'photo' => 'required|image|max:2000'
        ]);

        $nameFile = rand(10000,99999999).'.png';

        $saved = $this->photo->storeAs("public/photos/".auth()->user()->id, $nameFile);
        $saved = str_replace('public', 'storage', $saved);
        /* $path = $this->photo->storeAs('public/images', $nameFile); 
        $path = str_replace('public', 'storage', $path); */

        if($saved){
            auth()->user()->update([
                'profile_photo_path' => $saved
            ]);

            
        }
        
        return redirect()->route('dashboard');
    }


    public function logout(){
        session()->flush();
        return redirect()->route('dashboard');
    }

    
}
