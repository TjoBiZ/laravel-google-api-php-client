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
            __DIR__.'/path/to/config/courier.php' => config_path('courier.php'),
        ]);
    }

}