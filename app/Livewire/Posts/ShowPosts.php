<?php

namespace App\Livewire\Posts;

use Livewire\Component;
use App\Repositories\PostRepository;

class ShowPosts extends Component
{
    public function __construct()
    {
        $this->postRepository = new PostRepository();
    }

    public function render()
    {
        return view('livewire.posts.show-posts')
            ->layout('components.layouts.app')
            ->with([
                'posts' => $this->postRepository->all()
        ]);
    }
}
