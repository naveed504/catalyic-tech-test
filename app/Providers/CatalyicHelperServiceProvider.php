<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\CatalyicHelpers\CatalyicHelperClass;

class CatalyicHelperServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind('catalyiceHelper', function(){
            return new CatalyicHelperClass();
        });
    }
}
