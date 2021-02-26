<?php

namespace BradleyKingDev\LaravelSMSWorks;

use Illuminate\Support\ServiceProvider;
use BradleyKingDev\LaravelSMSWorks\Services\SMSWorks;

class LaravelSMSWorksServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {

    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Register the main class to use with the facade
        $this->app->singleton('SMSWorks', function () {
            return new SMSWorks;
        });
    }
}
