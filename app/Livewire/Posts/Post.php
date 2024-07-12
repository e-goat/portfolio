<?php

namespace App\Livewire\Posts;

use Livewire\Component;

class Post extends Component
{
    public $post;
    public $image;

    public function mount()
    {
        $this->image = 'https://picsum.photos/id/' . rand(1, 100) . '/400/250';
    }

    public function render()
    {
        return view('livewire.posts.post')
            ->layout('guest');
    }
}
