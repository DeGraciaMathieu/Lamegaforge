<?php

namespace App\Providers;

use App\Services\Video\VideoService;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class VideoServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('services\video', function($app) {
            return new VideoService(app('config'));
        });
    }
}
