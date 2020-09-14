<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\ToDoInterface;
use App\Repository\ToDoRepository;
use Prophecy\Argument\Token\TokenInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        app()->singleton('lang',function(){
            if(auth()->user())
            {
                if(empty(auth()->user()->lang))
                {
                    return 'en';
                }
                else{
                    return auth()->user()->lang;
                }}
    else{
        if(session()->has('lang'))
        {
               return  session()->get('lang');
        }
        else{
            return 'en';
        }
    }
        });
           // Builder::defaultStringLength(191);
         
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind(ToDoInterface::class,ToDoRepository::class);
    }
}
