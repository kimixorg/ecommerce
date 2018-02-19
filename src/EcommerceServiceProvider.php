<?php

namespace Kimix\Ecommerce;

use Illuminate\Support\ServiceProvider;

class EcommerceServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'kimix-ecommerce');

        // $this->publishes([
        //     __DIR__.'/../resources/views' => $this->app->basePath('resources/views/vendor/kimix-ecommerce'),
        // ]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
