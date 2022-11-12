<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Support\ServiceProvider;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use App\Models\Post;
use App\Models\Tag;

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
        //laravel pagination using bootstrap
        Paginator::useBootstrapFour();

        View::share('categories',Category::orderBy('id','DESC')->limit(20)->get());
        View::share('popular_posts',Post::orderBy('id','DESC')->limit(4)->get());
        View::share('tags',Tag::orderBy('id','DESC')->limit(10)->get());
        View::share('posts',Post::orderBy('id','DESC')->paginate(4));



    }
}
