<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('*', function ($view) {
            $categories = DB::select("SELECT * FROM `category`");
            $view->with('categories', $categories);
        });
        view()->composer('*', function($product){
            $products = DB::select("
                SELECT * FROM `product`
            ");
        } );
    }
}