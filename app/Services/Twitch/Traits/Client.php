<?php

namespace App\Services\Twitch\Traits;

use Cache;
use GuzzleHttp\Client as ClientHttp;

trait Client {

	protected function clientHttp()
	{
		return app('GuzzleHttp\Client');
	}

	public function callNamedTwitch($name, $cache = true)
	{
		$twitch = Cache::remember('twitch_active', 1, function() use($name) {

			$link = $this->config['api'] .
				'streams/' .
				$name .
				'?client_id=' . $this->config['client_id'];

			$result = $this->clientHttp()->request('GET', $link);

			$result = json_decode($result->getBody(), true);

			return isset($result['stream']) ? $result['stream'] : null ;
		});

		return $twitch;
	}
}
