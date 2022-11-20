<?php
namespace Theweezar\LaravelGlobalViewData;

use Illuminate\Support\ServiceProvider;

class GlobalViewDataServiceProvider extends ServiceProvider {
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
