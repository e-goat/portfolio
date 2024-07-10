<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Posts\{CreatePost, ShowPosts, Post, Single};
use App\Livewire\About;

Route::get('/', ShowPosts::class)->name('home');
Route::get('/about', About::class)->name('about');

Route::prefix('post')->group(function () {
    Route::get('/', ShowPosts::class)->name('post.index');
    Route::get('/create', CreatePost::class)->name('post.create');
    Route::get('/{slug}', Single::class)->name('post.show');
});