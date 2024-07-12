<?php

namespace App\Http\Controllers;

use App\Models\Readonly\PostReadonly as Post;

class ApiController extends Controller
{
    public function fetchPosts()
    {
        $posts = Post::all();
        return response()->json($posts);
    }

    public function fetchPost($slug)
    {
        $post = Post::where('slug', $slug)->first();
        return response()->json($post);
    }
}
