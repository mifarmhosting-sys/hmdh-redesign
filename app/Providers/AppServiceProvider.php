<?php

namespace App\Providers;

use App\Models\SiteSetting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // cms(), cms_image() ... template helpers
        require_once app_path('Support/helpers.php');
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Admin pages always need the site settings for the layout (name, logo).
        View::composer('admin.*', function ($view) {
            if (!array_key_exists('settings', $view->getData())) {
                $view->with('settings', SiteSetting::first() ?? new SiteSetting());
            }
        });
    }
}
