<?php

namespace Ezamux\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Route;

class BladeServiceProvider extends ServiceProvider
{


    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Extends blade directive
     *
     * @return void
     */
    public function boot()
    {
      /**
         * Current Route strict comparaison
         */
        Blade::if('route', function (...$expression) {
            return in_array(rtrim(Route::currentRouteName(), '.'), $expression);
        });

        /**
         * Current Route nested comparaison
         */
        Blade::if('routein', function (...$expression) {
            $routeName = rtrim(Route::currentRouteName(), '.');

            if (strrpos($routeName, '.')) {
                $routeName = substr($routeName, 0, strrpos($routeName, '.'));
            }

            return in_array($routeName, $expression);
        });

        /**
         * Current Route strict comparaison
         */
        Blade::if('routenot', function (...$expression) {
            return ! in_array(rtrim(Route::currentRouteName(), '.'), $expression);
        });

        /**
         * Current Route nested comparaison
         */
        Blade::if('routenotin', function (...$expression) {
            $routeName = rtrim(Route::currentRouteName(), '.');

            if (strrpos($routeName, '.')) {
                $routeName = substr($routeName, 0, strrpos($routeName, '.'));
            }

            return ! in_array($routeName, $expression);
        });
    }
}
