<?php

namespace App\Providers;

use App\Service\BusinessService;
use Illuminate\Pagination\Paginator;
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
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();

        if(request()->get('lang')) {
            \App::setLocale(request()->get('lang'));
        }

        $this->app->singleton('business', BusinessService::class);
    }

}
