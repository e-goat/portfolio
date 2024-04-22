<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Posts\{CreatePost, ShowPosts};

Route::get('/', function () {
    return view('components.layouts.app');
});

Route::get('/posts', ShowPosts::class);
Route::get('/post/create', CreatePost::class);