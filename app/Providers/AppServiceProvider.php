<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $navData = json_decode(file_get_contents(resource_path('data/navData.json')), true);

        view()->composer('*', function ($view) use ($navData) {
            $view->with('navLinks', $navData);
        });
    }
}
