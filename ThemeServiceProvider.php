<?php
namespace Verbal\Theme\Bootstrap;

use Illuminate\Support\ServiceProvider;

class ThemeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/templates', 'theme');
        
        $this->publishes([
            __DIR__ . '/assets' => public_path('assets'),
        ], 'theme');        
    }
}
