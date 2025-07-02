<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191); // Untuk menghindari error pada MySQL 5.7 ke bawah
        Paginator::useBootstrapFive(); // Menggunakan Bootstrap 5 untuk pagination

        Gate::define('admin', function ($user) {
            return $user->is_admin;
        });
    }
}
