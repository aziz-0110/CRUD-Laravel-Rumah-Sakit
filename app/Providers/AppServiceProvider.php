<?php

namespace App\Providers;

use App\Models\Perawat;
use App\Models\User;
// use Illuminate\Auth\Access\Gate;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        // ketika menggunakan gate pastikan
        Gate::define('admin', fn (User $user) => $user->name === 'aziz');
    }
}
