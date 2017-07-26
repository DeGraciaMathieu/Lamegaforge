<?php

namespace App\Services;

use Cache;
use TwitchApi;
use App\Repositories\Criteria\Twitchs\First;
use App\Repositories\Criteria\Twitchs\Selected;
use App\Exceptions\CanNotFindTwitchChannelSelected;

Class Twitch {

	public function __construct($config, $clientHttp)
	{
		$this->config = $config;
		$this->clientHttp = $clientHttp;
		$this->twitch = app('App\Repositories\TwitchRepository');
	}

	public function selected()
	{
		$this->twitch->pushCriteria(new Selected);

		if(! $twitch = $this->twitch->first()) {
			throw new CanNotFindTwitchChannelSelected;
		}

		return $twitch;
	}

	public function online()
	{
		$name = $this->selected()->name;
		// $name = 'dreamhackcs';

		$online = Cache::remember('twitch_active', 1, function() use($name) {

			$link = $this->config['api'] .
				'streams/' .
				$name .
				'?client_id=' . $this->config['client_id'];

			$result = $this->clientHttp->request('GET', $link);

			$result = json_decode($result->getBody(), true);

			return isset($result['stream']) ? $result['stream'] : null ;
		});

		return $online;
	}
}