<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Posts\{CreatePost, ShowPosts};

Route::get('/', function () {
    return view('components.layouts.app');
});

Route::get('/', ShowPosts::class)->name('posts');
Route::get('/post/create', CreatePost::class)->name('post.create');