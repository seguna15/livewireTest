<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class Test extends Component
{
    public $title;
    public $body;
    public $test = 'test';
    public $mountCall = 0;
    public $hydrateCall = 0;
    public $updatedCall = 0;

    public function resetTitle($title, $body){
        $this->title = $title;
        $this->body = $body;
    }

    public function mount(Request $request){
        $this->title = $request->title;
        $this->mountCall++;
    }

    public function hydrate(){

        $this->hydrateCall++;
    }

    /*public function updated(){
        $this->updatedCall++;
    }*/

    public function updatedTest(){
        $this->updatedCall++;
    }

    public function render(){
        return view('livewire.test');
    }
}
