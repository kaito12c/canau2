<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Blade;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;

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
        //
        Model::unguard();

        \Illuminate\Support\Facades\Schema::defaultStringLength(191);

        //管理者権限
        // Gate::define('admin',  function (User $user){
        //     return $user->username === 'Kaito';
        // });

        // Blade::if('admin', function(){
        //     return request()->user()?->can('admin');
        // });
    }
}
