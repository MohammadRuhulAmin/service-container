<?php

namespace App\Providers;

use App\Billing\PaymentGateway;
use Illuminate\Support\ServiceProvider;
use App\SchoolInformation\School;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {


            // $this->app->bind(School::class,function($app){
            //     return new School("Alfa-School","Dhanmondi-Dhaka","Ruhul Amin","jjn090nnXX","BIT");
            // });
            $this->app->bind(School::class,function($app){
                return new School("Alfa-School","Dhanmondi-Dhaka","Ruhul Amin","jjn090nnXX","BIT");
            });
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
}
