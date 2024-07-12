<?php
namespace App\Interfaces;

interface PostRepositoryInterface
{
    public function like($id);
    public function unlike($id);
    public function getComments($id);
    public function paginated($number);
}