<?php
namespace App\Repositories;
use App\Models\Post;
use App\Interfaces\PostRepositoryInterface;

class PostRepository extends BaseRepository implements PostRepositoryInterface
{
    public function __construct()
    {
        parent::__construct(Post::class);
    }

    public function like($id)
    {
        $post = $this->show($id);
        $this->update(['liked' => $post->liked + 1], $id);
    }

    public function unlike($id)
    {
        $post = $this->show($id);
        $this->update(['liked' => $post->liked - 1], $id);
    }

    public function getComments($id)
    {
        return $this->show($id)->comments;
    }

    public function paginated($number)
    {
        return $this->model->paginate($number);
    }
}