<?php

namespace App\Providers;

use Illuminate\Database\Schema\Builder;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        Builder::defaultStringLength(191); // Update defaultStringLength
        View::composer(['*'], 'App\Http\View\Composers\Statistics');
        View::composer(['services.*', 'blogs.*', 'welcome', 'shop.*', 'jobs.*', 'gallery.*', 'pages.career'], 'App\Http\View\Composers\HashId');


    }
}
