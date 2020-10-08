<?php

namespace Toriomlab\LaravelMultilang;

use Illuminate\Support\ServiceProvider;

Class LaravelMultilangServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
        $this->publishes([
            __DIR__.'/config/multilang.php' => config_path('multilang.php'),
        ]);
    }
    
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/multilang.php', 'multilang'
        );
    }
}