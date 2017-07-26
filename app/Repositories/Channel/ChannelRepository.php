<?php

namespace App\Repositories\Channel;

use Prettus\Repository\Eloquent\BaseRepository;

class ChannelRepository extends BaseRepository {

    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return "App\\Models\\Channel";
    }
}