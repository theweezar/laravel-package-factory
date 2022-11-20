<?php
namespace Laracraft\ViewData;

use Illuminate\Support\ServiceProvider;

class ViewDataServiceProvider extends ServiceProvider {
    public function boot()
    {

    }
    public function register()
    {
        /**
         * Using view composer to set following variables globally
         * 
         * @param \Illuminate\View\View $view
         */
        view()->composer('*', function($view) {
            $view->with('currentCustomer', 'Duc Hoang');
        });
    }
}
