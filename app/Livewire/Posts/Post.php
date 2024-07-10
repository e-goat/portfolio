<?php

namespace App\Livewire\Posts;

use Livewire\Component;
use App\Repositories\PostRepository;

class Post extends Component
{
    public $post;

    public function render()
    {
        return view('livewire.posts.post')
            ->layout('components.layouts.app');
    }
}
