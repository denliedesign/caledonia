<?php

namespace App\Providers;

use App\Post;
use App\Text;
use App\Update;
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
        view()->composer('*',function($view) {
            $view->with('updates', Update::all());
        });

        view()->composer('*',function($view) {
            $view->with('posts', Post::orderByDesc('shown')->paginate(3));
        });

        view()->composer('*',function($view) {
            $view->with('texts', Text::all());
        });
    }
}
