<?php

namespace Lovestorms\Wowzastreamsecuretoken;

use Illuminate\Support\ServiceProvider;

class WowzaTokenServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app['wowzatoken'] = $this->app->share(
            function () {
                return new WowzaToken();
            }
        );
    }
}
