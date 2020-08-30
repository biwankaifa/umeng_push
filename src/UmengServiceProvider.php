<?php

namespace biwankaifa\umeng_push;

use Illuminate\Support\ServiceProvider;
use biwankaifa\umeng_push\Pusher\UmengPusher;

class UmengServiceProvider extends ServiceProvider
{
    protected $defer = true;

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->publishes([
            __DIR__ . '/config.php' => base_path('config/umeng.php'),
        ]);
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton('umeng', function ($app) {
            return new UmengPusher();
        });
    }

    public function provides()
    {
        return ['umeng'];
    }
}