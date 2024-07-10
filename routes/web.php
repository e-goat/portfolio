<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Posts\{CreatePost, ShowPosts};
use App\Livewire\About;

Route::get('/', function () {
    return view('components.layouts.app');
});

Route::get('/', ShowPosts::class)->name('home');
Route::get('/post/create', CreatePost::class)->name('post.create');
Route::get('/about', About::class)->name('about');