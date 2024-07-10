<?php

namespace App\Livewire\Posts;

use Livewire\Component;

class CreatePost extends Component
{
    public $title = "Create Post";
 
    public function render()
    {
        return view('livewire.posts.create-post')->with([
            'author' => 'John Doe',
        ])
        ->layout('components.layouts.app');
    }
}