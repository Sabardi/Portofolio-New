<?php

namespace App\Providers;

use App\Repositories\Contracts\PortfolioRepositoryInterface;
use App\Repositories\PortfolioRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(PortfolioRepositoryInterface::class, PortfolioRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
