<?php

namespace Miguel_Costa\Office365API;

use Illuminate\Support\ServiceProvider;

class Office365APIServiceProvider extends ServiceProvider
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
        // use this if your package has views
        //$this->loadViewsFrom(realpath(__DIR__.'/resources/views'), 'skeleton');
        
        // use this if your package has lang files
        //$this->loadTranslationsFrom(__DIR__.'/resources/lang', 'skeleton');
        
        // use this if your package has routes
        //$this->setupRoutes($this->app->router);
        
        // use this if your package needs a config file
         $this->publishes([
                 __DIR__.'/config/config.php' => config_path('office365API.php'),
         ]);
        
        // use the vendor configuration file as fallback
        // $this->mergeConfigFrom(
        //     __DIR__.'/config/config.php', 'skeleton'
        // );
    }
 
    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerSkeleton();
        
        // use this if your package has a config file
        // config([
        //         'config/skeleton.php',
        // ]);
    }
    private function registerSkeleton()
    {
        $this->app->bind('Office365API',function($app){
            return new Office365API($app);
        });
    }
}