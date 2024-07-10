<?php
namespace App\Interfaces;

interface PostRepositoryInterface
{
    public function like($id);

    public function getBySlug($slug);
}