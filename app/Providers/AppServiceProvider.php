<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
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
        Model::preventLazyLoading(app()->environment(['local']));
        Model::preventSilentlyDiscardingAttributes(app()->environment(['local']));

        DB::whenQueryingForLongerThan(5000, function() {
            //TODO: Event 
        });
    }
}
