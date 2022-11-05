<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use App\Models\Menu;
use App\Models\Submenu;
use App\Models\Header;
use App\Models\Footer;
use App\Models\Quicklink;
use App\Models\Sociallink;
use Illuminate\Support\Facades\View;
use Illuminate\Cache\RateLimiting\Limit;

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
        View::composer('*', function($view)
        {
         $data=Menu::Limit(8)->get(); 
         View::share('menu', $data);
        });


        View::composer('*', function($view1)
        {
         $data=Submenu::all(); 
         View::share('submenu', $data);
        });


        View::composer('*', function($view2)
        {
         $data=Header::all(); 
         View::share('header', $data);
        });


        View::composer('*', function($view3)
        {
         $data=Footer::all(); 
         View::share('footer', $data);
        });


        View::composer('*', function($view4)
       {
        $data=Quicklink::all(); 
        View::share('quicklink', $data);
       });


       View::composer('*', function($view5)
       {
        $data=Sociallink::all(); 
        View::share('sociallink', $data);
       });
    }
}
