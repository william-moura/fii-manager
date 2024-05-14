<?php

namespace App\Providers;

use App\Domain\Fii\Interfaces\FiiRepositoryInterface;
use App\Domain\Fii\Interfaces\FiiServiceInterface;
use App\Domain\Fii\Repositories\FiiRepository;
use App\Domain\Fii\Services\FiiService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        $this->app->bind(FiiServiceInterface::class, FiiService::class);
        $this->app->bind(FiiRepositoryInterface::class, FiiRepository::class);
    }
}
