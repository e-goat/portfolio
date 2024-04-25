<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\PostRepositoryInterface;

class PostController extends Controller
{
    private $postRepository;

    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function likeAction(Request $request) : \Illuminate\Http\JsonResponse
    {
        $id = $request->id;
        $this->postRepository->like($id);
        return response()->json(['message' => 'Post liked']);
    }
}
