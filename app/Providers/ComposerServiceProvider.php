<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Category;
use App\Tag;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view::composer(["front.index"],function($view){
            
            $categories = Category::orderBy('name','desc')->get();
            $tags = Tag::orderBy('name','desc')->get();
            $view->with([
                'categories'=> $categories,
                'tags' => $tags
                ]);
            
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
