<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VideoComment extends Model
{
    public $fillable = [
        'id',
        'video_id',
        'user_id',
        'content',
        'related_comment'
    ];

    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function video()
    {
        return $this->belongsTo(Video::class);
    }

    public function relatedComments()
    {
        return $this->hasMany(VideoComment::class, 'related_comment');
    }
}
