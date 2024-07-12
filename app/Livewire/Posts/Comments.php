<?php

namespace App\Livewire\Posts;

use Livewire\Component;
use App\Models\Post;

class Comments extends Component
{
    public $post;

    protected $listeners = [
        'commentAdded' => 'mount',
        'commentDeleted' => 'mount',
        'commentEdited' => 'mount',
        'commentReplyAdded' => 'mount',
    ];

    public function mount(Post $post)
    {
        $this->post = $post;
    }

    public function render()
    {
        return view('livewire.posts.comments');
    }
}