<?php

namespace App\Services\Video\Traits;

trait Youtube {

    protected function api()
    {
        return app('Youtube');
    }
}
