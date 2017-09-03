<?php

namespace App\Services\Video\Traits;

trait Comment {

	public function pushComment($video_id, $user_id, $content, $related = null)
	{
		$video = $this->getOnlineVideoById($video_id);

        $params = [
            'video_id' => $video_id,
            'user_id' => $user_id,
            'content' => $content,
            'related_comment' => $related,
        ];

        $comment = new \App\Models\VideoComment($params);

    	$video->comments()->save($comment);

	}
}
