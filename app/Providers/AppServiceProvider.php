<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerUploadService();
    }

    /*
    * Upload
    */
    protected function registerUploadService(){

        $this->app->bind('App\Pond\Service\UploadInterface', function()
        {
            return new \App\Pond\Service\UploadWorker();
        });
    }
}
