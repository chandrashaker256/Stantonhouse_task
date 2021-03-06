<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Services\StringTask;

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
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('StringTask', function ($app) {
            return new StringTask();
        });
    }
}
