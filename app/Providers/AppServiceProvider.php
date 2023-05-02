<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\category;
use App\Models\analytics;
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
        View::composer('layouts.website', function ($view)
        {
            $category = category::orderby('id','ASC')->get()->keyBy('category_name');
            $analytics=Analytics::orderby('id','Desc')->paginate(1);
            
            $view->with('category', $category);
            $view->with('analytics', $analytics);
        });

        View::composer('layouts.website_home', function ($view)
        {
            $category = category::orderby('id','ASC')->get()->keyBy('category_name');
            $analytics=Analytics::orderby('id','Desc')->paginate(1);
            
            $view->with('category', $category);
            $view->with('analytics', $analytics);
        });
    }
}
