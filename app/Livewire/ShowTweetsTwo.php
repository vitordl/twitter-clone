<?php

namespace App\Livewire;


use App\Events\PageActionEvent;
use App\Models\Like;
use App\Models\Tweet;
use Livewire\Component;

class ShowTweetsTwo extends Component
{

    public $content;

    protected $listeners = ['echo:action-channel,PageActionEvent' => 'updateRender'];

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
        
        PageActionEvent::dispatch();
    }

    public function like($id, $auth_id){ //id do tweet selecionado
        //dd($id);
        $likes = Like::where('user_id', $auth_id)->where('tweet_id', $id)->first();
        //dd = dump and die, thats why   

        if(!$likes){
            //Se nao tiver likes respectivo ao id autenticado e o id do tweet, faça

            auth()->user()->likes()->create([
                'user_id' => $auth_id,
                'tweet_id' => $id
            ]);  
                       
        
        }

        PageActionEvent::dispatch();
    }

    public function unlike($id, $auth_id){

        auth()->user()->likes()->where('user_id', $auth_id)->where('tweet_id', $id)->delete();
        PageActionEvent::dispatch();
    }


    public function updateRender(){
        $this->render();
    }

}
