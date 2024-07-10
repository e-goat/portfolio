<?php

namespace App\Livewire\Posts;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Repositories\PostRepository;

class Single extends Component
{
    public $post;
    public function mount(Request $request, PostRepository $postRepository)
    {
        $slug = $request->slug;
        $post = $postRepository->getBySlug($slug);
        $this->post = $post;
    }

    public function render()
    {
        return view('livewire.posts.single')
            ->layout('components.layouts.app');
    }
}
