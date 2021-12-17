<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class PostShow extends Component
{
    public $post;

    public function mount($post){
        $this->post = $post;
    }

    public function deletePost($id){
        Post::findOrFail($id)->delete();

        $this->emit('postDeleted');
    }

    public function render()
    {
        return view('livewire.post-show');
    }
}
