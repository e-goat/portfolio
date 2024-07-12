<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Posts\{CreatePost, ShowPosts, Post, Single};
use App\Livewire\About;

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('home');

    Route::prefix('post')->group(function () {
        Route::get('/create', CreatePost::class)->name('post.create');
        Route::get('/{slug}', Single::class)->name('post.show');
    });
});
