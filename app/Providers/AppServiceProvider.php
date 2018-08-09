<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
<<<<<<< HEAD
use Illuminate\Support\Facades\Schema;
=======
use Schema;
>>>>>>> bbf9795137d5d597ee0c595b6bc66f9559f86c24

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
<<<<<<< HEAD
        Schema::defaultStringLength(191);
=======
         Schema::defaultStringLength(191);
>>>>>>> bbf9795137d5d597ee0c595b6bc66f9559f86c24
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
