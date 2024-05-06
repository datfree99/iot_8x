<?php

namespace App\Providers;

use App\Service\CategoryService;
use Illuminate\Support\ServiceProvider;

class RegisterServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->category();
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }


    public function category()
    {
        $this->app->singleton('category', CategoryService::class);
    }
}
