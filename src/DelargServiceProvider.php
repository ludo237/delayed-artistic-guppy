<?php

namespace Ludo237\DelayedArtisticGuppy;

use Illuminate\Support\ServiceProvider;

/**
 * Class DelargServiceProvider
 * @package Ludo237\DelayedArtisticGuppy
 */
final class DelargServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;
    
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            
            // Publishing the configuration file.
            $this->publishes([
                __DIR__ . "/../config/delarg.php" => config_path("delarg.php"),
            ], "delarg.config");
        }
    }
    
    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . "/../config/delarg.php", "delarg");
        
        // Register the service the package provides.
        $this->app->singleton(Delarg::class, function () {
            return new Delarg($this->app);
        });
    
        $this->app->alias(Delarg::class, "delarg");
    }
    
    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ["delarg"];
    }
}