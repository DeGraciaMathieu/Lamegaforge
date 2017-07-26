<?php

namespace App\Services\Twitch;

use App\Services\Twitch\Traits;

Class TwitchService {

	use Traits\Client;
	use Traits\Repository;

	public function __construct($config)
	{
		$this->config = $config;
	}

	public function getActiveTwitchInfos()
	{
		$selectedTwitch = $this->getSelectedTwitchModel();

		return $this->callNamedTwitch($selectedTwitch->name);
	}
}
