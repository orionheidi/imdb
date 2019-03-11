<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Movie;

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
        view()->composer('partials.sidebar',function($view){
            $movies = Movie::limit(5)->orderBy('id', 'desc')->get();
            $view->with(compact('movies'));
        });
    }
}
