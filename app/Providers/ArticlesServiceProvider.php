<?php

namespace App\Providers;

use App\Models\Services\ArticlesServices;
use Illuminate\Support\ServiceProvider;

class ArticlesServiceProvider extends ServiceProvider
{
    /**
     * Register servProices.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(abstract: 'articles', concrete: function($app) {
            return new ArticlesServices();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
