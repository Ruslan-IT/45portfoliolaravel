<?php

namespace App\Livewire\Pages\Post;

use Livewire\Component;

class Create extends Component
{

    public $count = 1;

    public function increment()
    {
        $this->count++;
    }

    public function minus()
    {
        $this->count--;

    }


    public function render()
    {
        return view('livewire.pages.post.create');
    }
}

