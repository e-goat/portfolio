<?php

namespace App\Livewire\Posts;

use Livewire\Component;
use App\Interfaces\PostRepositoryInterface;
use Livewire\WithPagination;

class ShowPosts extends Component
{
    use WithPagination;

    public function __construct()
    {
        $this->postRepository = app(PostRepositoryInterface::class);
    }

    public function render()
    {
        return view('livewire.posts.show-posts')
            ->layout('components.layouts.app')
            ->with([
                'posts' => $this->postRepository->paginated(16)
            ]);
    }
}
