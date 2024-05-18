<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\Interface\IUserRepository;
use App\Repository\UserRepository;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(IUserRepository::class, UserRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
