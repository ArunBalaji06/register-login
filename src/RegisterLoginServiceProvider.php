<?php

namespace Devpac\RegisterLogin;

use Illuminate\Support\ServiceProvider;

class RegisterLoginServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'register-login');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'register-login');
        $this->loadMigrationsFrom(__DIR__.'/Database/Migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('register-login.php'),
            ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/register-login'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/register-login'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/register-login'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);

            // Publishing the translation files.
            // $this->publishes([
            //     __DIR__.'/../resources/lang' => resource_path('lang/vendor/register-login'),
            // ], 'lang');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'register-login');

        // Register the main class to use with the facade
        $this->app->singleton('register-login', function () {
            return new RegisterLogin;
        });
    }
}
