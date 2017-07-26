<?php

namespace App\Repositories\Video\Criteria;

use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class OrderByDesc
 * @package namespace App\Repositories\Video\Criteria;
 */
class OrderByDesc implements CriteriaInterface
{
    /**
     * Apply criteria in query repository
     *
     * @param                     $model
     * @param RepositoryInterface $repository
     *
     * @return mixed
     */
    public function apply($model, RepositoryInterface $repository)
    {
        $model = $model->orderByDesc('published_at');

        return $model;
    }
}
