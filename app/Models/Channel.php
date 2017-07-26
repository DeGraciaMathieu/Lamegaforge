<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    public $timestamps = true;

    protected $fillable = [
		'name',
		'youtube_id',
		'description',
    ];

    public function videos()
    {
        return $this->belongsTo(Video::class);
    }
}
