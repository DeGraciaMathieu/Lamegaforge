<?php

namespace App\Services\Video\Traits;

trait Comment {

	public function pushComment($video_id, $user_id, $content, $related = null)
	{
        $params = [
            'video_id' => $video_id,
            'user_id' => $user_id,
            'content' => $content,
            'related_comment' => $related,
        ];

        $commentRepository = app('App\Repositories\Comment\CommentRepository');

        $commentRepository->create($params);
	}
}
