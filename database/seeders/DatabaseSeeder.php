<?php

namespace Database\Seeders;

use App\Models\{User, Post, Comment, Reply};
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(100)->create();
        Post::factory(100)->create();
        Comment::factory(200)->create();
        Reply::factory(300)->create();
    }
}
