<?php

namespace PragmaBroadvertising\SolarEdge;

use Illuminate\Support\ServiceProvider;
use PragmaBroadvertising\SolarEdge\Models\SolarEdge;
use PragmaBroadvertising\SolarEdge\Models\SolarEdgeClient;

class SolarEdgeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/main.php' => config_path('laravel-solaredge-api.php')
        ], 'laravel-solaredge-api');
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/config/main.php', 'laravel-solaredge-api'
        );

        $this->app->register('Ixudra\Curl\CurlServiceProvider');

        $this->app->bind('solaredge', function() {
                return new SolarEdge(new SolarEdgeClient());
        });
    }
}
