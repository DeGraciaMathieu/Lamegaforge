<?php

namespace App\Repositories\Video;

use Prettus\Repository\Eloquent\BaseRepository;

class VideoRepository extends BaseRepository {

    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return "App\\Models\\Video";
    }
}