<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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
<<<<<<< HEAD
        //inseri isso para suportar o tamanho do banco de dados
        Schema::defaultStringLength(191);
=======
        \Illuminate\Support\Facades\Schema::defaultStringLength(191);
>>>>>>> 69870062f4010bae7e37f803fd0f156e0e563f50
    }
}
