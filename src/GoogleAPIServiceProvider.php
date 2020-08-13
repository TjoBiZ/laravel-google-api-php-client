<?php
namespace GoogleAPI;

use Illuminate\Support\ServiceProvider as MainServiceProvider;

class GoogleAPIServiceProvider extends MainServiceProvider {

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../configs/google-api.php' => config_path('google-api.php'),
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../configs/google-api.php', 'google-api'
        );

        $this->app->bind( GoogleAPIClient::class );
    }

}