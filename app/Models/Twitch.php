<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Twitch extends Model
{
	public $table = 'twitchs';

    public $timestamps = true;

    protected $fillable = [
		'name',
		'twitch_id',
		'description',
		'selected',
    ];
}
