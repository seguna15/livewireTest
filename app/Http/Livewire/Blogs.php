<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Blog;
use Livewire\WithPagination;

class Blogs extends Component
{
    use WithPagination;

    public $title;
    public $body;
    
    public $search = '';

    public function updatingSearch(){
        $this->resetPage();
    }

    public function createBlog(){
        $blog = new Blog();
        $blog->title = $this->title;
        $blog->body = $this->body;
        $blog->save();
        $this->clearForm();

        session()->flash('message', 'Post successfully created');
    }

    public function clearForm(){
        $this->title = '';
        $this->body = '';
    }

    public function deleteBlog($id){
        Blog::findOrFail($id)->delete();
         session()->flash('message', 'Post successfully deleted');
    }

    public function render()
    {
        return view('livewire.blogs',[
            'blogs' => Blog::orderBy('created_at', 'desc')->paginate(2)
        ]);
    }
}
