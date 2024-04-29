<?php

namespace App\Livewire\Posts;

use Livewire\Component;
use App\Repositories\PostRepository;

class ShowPosts extends Component
{
    private $postRepository;

    public function mount(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
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
