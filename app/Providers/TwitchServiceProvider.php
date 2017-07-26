<?php

namespace App\Providers;

use App\Services\Twitch\TwitchService;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class TwitchServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('services\twitch', function($app) {
            return new TwitchService(config('twitch'));
        });
    }
}