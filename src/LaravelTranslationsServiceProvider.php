<?php

namespace BRamalho\LaravelTranslations;

use Illuminate\Support\ServiceProvider;

class LaravelTranslationsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes(
            [
                __DIR__ . '/../database/migrations' => base_path('database/migrations')
            ]
        );
    }

    public function register()
    {

    }
}
