<?php

namespace App\Providers;

use App\Models\Employee;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        //
        View::share('title', 'Employee Admin');
        View::composer('employee.index', function($view){
            $view->with('emploee', Employee::all());
        });
    }
}
