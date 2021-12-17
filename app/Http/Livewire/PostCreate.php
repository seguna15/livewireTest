<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class PostCreate extends Component
{
    public $title;
    public $body;

    protected $rules = [
        'title' => 'required|min:6',
        'body' => 'required|min:10',
    ];

    public function updated($field){
        $this->validateOnly($field);
    }

    public function createPost(){
        $this->validate();
        Post::create([
            'title' => $this->title,
            'body' => $this->body
        ]);
        $this->clearForm();

        $this->emit('postCreated');
    }

    public function clearForm(){
        $this->title = '';
        $this->body = '';
    }

    public function render()
    {
        return view('livewire.post-create');
    }
}
