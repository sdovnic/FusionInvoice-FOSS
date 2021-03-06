<?php

namespace FI\Widgets\Dashboard\TodaysWorkorders\Providers;

use Illuminate\Support\ServiceProvider;

class WidgetServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Register the view path.
        view()->addLocation(app_path('Widgets/Dashboard/TodaysWorkorders/Views'));

        // Register the widget view composer.
        view()->composer('TodaysWorkordersWidget', 'FI\Widgets\Dashboard\TodaysWorkorders\Composers\TodaysWorkordersWidgetComposer');
    }

    public function register()
    {
        //
    }
}