<?php

namespace App\Providers;
use App\Chariot;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
   /*     
   if(Auth::check()){
    view()->composer('*', function ($view) 
    {
        
      
        $cart_total=Chariot::with('Books')->where('user_id','=',Auth::user()->id)->sum('total');
        
        $view->with('cart_total', $cart_total );    
    });
    }*/
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
