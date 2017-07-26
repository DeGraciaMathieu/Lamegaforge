<?php

namespace App\Repositories\Twitch;

use Prettus\Repository\Eloquent\BaseRepository;

class TwitchRepository extends BaseRepository {

    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return "App\\Models\\Twitch";
    }
}