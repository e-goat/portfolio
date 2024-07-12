<?php

namespace App\Livewire\Posts;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Interfaces\PostRepositoryInterface;

class Single extends Component
{
    public $post;
    public $image = 'https://picsum.photos/200/300';
    public $comments = [];

    public function __construct()
    {
        $this->postRepository = app(PostRepositoryInterface::class);
    }

    public function mount(Request $request)
    {
        $slug = $request->slug;
        $post = $this->postRepository->findBySlug($slug);
        $this->post = $post;
        $this->comments = $this->postRepository->getComments($post->id);
    }

    public function render()
    {
        return view('livewire.posts.single');
    }
}
