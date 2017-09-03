<?php

namespace App\Repositories\Comment;

use Prettus\Repository\Eloquent\BaseRepository;

class CommentRepository extends BaseRepository {

    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return "App\\Models\\VideoComment";
    }
}