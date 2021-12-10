<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloWorld extends Component
{
    public $title = 'Hello World';
    public $body;
    public $active = false;
    public $country = "UK";

    public function render()
    {
        return view('livewire.hello-world',
        [
            'name' => "John Doe"
        ]
    );
    }
}
