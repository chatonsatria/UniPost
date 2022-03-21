<?php

namespace App\Providers;


use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

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
        //untuk menggunakan pagination bootstrap gunakan code di bawah
        // Paginator::useBootstrap();

        //gate admin untuk satu user
        //bisa lebih kompleks jika menggunakan table tambahan dalam db seperti user_role
        Gate::define('admin', function (User $user) {
            return $user->username === 'chatonsatria';
        });
    }
}
