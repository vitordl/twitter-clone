<?php

namespace App\Livewire;

use App\Models\Tweet;
use Livewire\Component;

class ShowTweetsTwo extends Component
{

    public $content;
    public $tweet_like;

    public function render()
    {
        $tweets = Tweet::latest()->get();
        return view('livewire.show-tweets-two', ['tweets' => $tweets]);
    }

    public function create(){

        $this->validate([
            'content' => 'required|min:5'
        ]);

        $this->content = str_replace("\n", " ", $this->content);
        // dd($this->content);

        

        auth()->user()->tweets()->create([
            'content' => $this->content
        ]);

        $this->content = '';
       
        
    }

    public function like(){
        $this->tweet_like++;
        dd($this->tweet_like);
    }

    

    
}
