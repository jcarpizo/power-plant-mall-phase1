<?php

namespace PowerPlantMall\Providers;

use Illuminate\Support\ServiceProvider;

class MerchantServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('PowerPlantMall\Services\MerchantServiceInterface', 'PowerPlantMall\Services\MerchantService');
    }
}
