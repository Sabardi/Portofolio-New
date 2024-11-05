<?php

namespace App\Providers;

use App\Repositories\ArticleRepository;
use App\Repositories\CategoriRepository;
use App\Repositories\Contracts\ArticleRepositoryInterface;
use App\Repositories\Contracts\CategoriRepositoryInterface;
use App\Repositories\Contracts\TutorialRepositoryInterface;
use App\Repositories\TutorialRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ArticleRepositoryInterface::class, ArticleRepository::class);
        $this->app->bind(TutorialRepositoryInterface::class, TutorialRepository::class);
        $this->app->bind(CategoriRepositoryInterface::class, CategoriRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
