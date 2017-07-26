<?php

namespace App\Services\Twitch\Traits;

use App\Repositories\Twitch\Criteria;

trait Repository {

    protected function repository()
    {
        return app('App\Repositories\Twitch\TwitchRepository');
    }

    public function getSelectedTwitchModel()
    {
    	$repository = $this->repository();

		$repository->pushCriteria(new Criteria\Selected);

		return $repository->first();
    }
}
