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
        $this->app->bind(\App\Repositories\BaseRepository::class, \App\Interfaces\RepositoryInterface::class);
        $this->app->bind(\App\Repositories\PostRepository::class, \App\Interfaces\PostRepositoryInterface::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {}
}