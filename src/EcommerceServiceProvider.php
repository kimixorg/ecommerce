<?php

namespace Kimix\Ecommerce;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class EcommerceServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__ . '/../routes.php';

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'kimix-ecommerce');

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
