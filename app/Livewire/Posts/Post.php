<?php

namespace App\Livewire\Posts;

use Livewire\Component;

class Post extends Component
{
    public $post;
    public $image = 'https://picsum.photos/id/1/400/250';

    public function render()
    {
        return view('livewire.posts.post')
            ->layout('guest');
    }
}
