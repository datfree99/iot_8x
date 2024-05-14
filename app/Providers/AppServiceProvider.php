<?php

namespace App\Providers;

use App\Service\BusinessService;
use App\Service\CategoryService;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Session;
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
            Session::put('language', request()->get('lang'));
            Session::save();
        }

        $this->app->singleton('business', BusinessService::class);
        $this->app->singleton('category', CategoryService::class);
    }

}
