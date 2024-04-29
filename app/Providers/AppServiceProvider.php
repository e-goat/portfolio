<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(\App\Interfaces\RepositoryInterface::class, \App\Repositories\BaseRepository::class);
        $this->app->bind(\App\Interfaces\PostRepositoryInterface::class, \App\Repositories\PostRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {}
}