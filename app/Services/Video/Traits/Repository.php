<?php

namespace App\Services\Video\Traits;

use App\Repositories\Video\Criteria;

trait Repository {

    protected function repository()
    {
        return app('App\Repositories\Video\VideoRepository');
    }

    public function getVideosForDashboardCarousel()
    {
        $repository = $this->repository();

        $repository->pushCriteria(new Criteria\OrderByDesc);
        $repository->pushCriteria(new Criteria\Online);
        $repository->pushCriteria(new Criteria\Limit(15));

        return $repository->all();
    }

    public function getOnlineVideoById($id)
    {
        $repository = $this->repository();

        $repository->pushCriteria(new Criteria\Online);

        return $repository->find($id);
    }

    public function randomOnlineVideos($limit)
    {
        $repository = $this->repository();

        $repository->pushCriteria(new Criteria\Online);
        $repository->pushCriteria(new Criteria\Random);
        $repository->pushCriteria(new Criteria\Limit($limit));

        return $repository->all();
    }
}


