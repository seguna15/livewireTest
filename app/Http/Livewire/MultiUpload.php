<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class MultiUpload extends Component
{
    use WithFileUploads;

    public $photos = [];

    public function save()

    {

        $this->validate([

            'photos.*' => 'image|max:1024', // 1MB Max

        ]);

        foreach ($this->photos as $photo) {

            $photo->store('images');

        }

    }
    
    public function render()
    {
        return view('livewire.multi-upload');
    }
}
