<?php

namespace Ludo237\Slugify;

use Illuminate\Support\ServiceProvider;

/**
 * Class SlugifyServiceProvider
 * @package Ludo237\Slugify
 */
final class SlugifyServiceProvider extends ServiceProvider
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
                __DIR__ . "/../config/slugify.php" => config_path("slugify.php"),
            ], "slugify.config");
        }
    }
    
    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . "/../config/slugify.php", "slugify");
        
        // Register the service the package provides.
        $this->app->singleton(Slugify::class, function () {
            return new Slugify($this->app);
        });
    
        $this->app->alias(Slugify::class, "slugify");
    }
    
    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ["slugify"];
    }
}