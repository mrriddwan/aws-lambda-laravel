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
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $cacheDirectory = '/tmp/framework/cache';
        $migrationsDirectory = '/tmp/database/migrations';

        if (!file_exists($cacheDirectory))
        {
            mkdir($cacheDirectory, 0755, true);
        }

        if (!file_exists($migrationsDirectory))
        {
            mkdir($migrationsDirectory, 0755, true);
        }
    }
}
