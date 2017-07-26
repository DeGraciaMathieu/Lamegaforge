<?php

namespace App\Models;

use DateInterval;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    public $timestamps = true;

    protected $fillable = [
		'channel_id',
		'youtube_id',
		'title',
		'description',
		'view_count',
		'like_count',
		'online',
		'published_at',
		'duration'
    ];

    public function channel()
    {
        return $this->belongsTo(Channel::class);
    }

    public function comments()
    {
        return $this->hasMany(VideoComment::class);
    }

    public function formatedDuration()
    {
    	if (! $this->duration) {
    		return null;
    	}

        return with(new DateInterval($this->duration))->format('%i:%S');
    }

    public function formatedPublishedAt()
    {
    	return Carbon::parse($this->published_at)->format('Y-m-d');
    }
}
