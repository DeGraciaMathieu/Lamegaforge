<?php

namespace App\Providers;

use App\Services\Youtube\YoutubeManager;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class YoutubeServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('services\youtube', function($app) {
            return new YoutubeManager($app);
        });
    }
}
