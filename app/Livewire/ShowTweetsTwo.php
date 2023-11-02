<?php

namespace App\Livewire;

use App\Models\Like;
use App\Models\Tweet;
use Livewire\Component;

class ShowTweetsTwo extends Component
{

    public $content;
    public $tweet_like=0;

    public function render()
    {
        $tweets = Tweet::latest()->get();
        return view('livewire.show-tweets-two', ['tweets' => $tweets]);
    }

    public function create(){

        $this->validate([
            'content' => 'required|min:2'
        ]);

        $this->content = str_replace("\n", " ", $this->content);
        
        auth()->user()->tweets()->create([
            'content' => $this->content
        ]);

        $this->content = '';       
    }

    public function like($id){ //id do tweet selecionado
        //dd($id);
        
        $tweet = Tweet::findOrFail($id); //encontra o tweet pelo id
        // $likes = Like::all();
        $tweet->likes_qtd++;     //aumenta 1 like naquele especifico tweet
        $tweet->save();

    }

    

    
}
