<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class Posts extends Component
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
    }

    public function clearForm(){
        $this->title = '';
        $this->body = '';
    }

    public function deletePost($id){
        Post::findOrFail($id)->delete();
    }

    public function render()
    {
        return view('livewire.posts', [
            'posts' => Post::all()
        ]);
    }
}
