<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Test extends Component
{
    public $title;
    public $body;
    public function resetTitle($title, $body)
    {
        $this->title = $title;
        $this->body = $body;
    }

    public function render()
    {
        return view('livewire.test');
    }
}
