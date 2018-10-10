<?php

namespace Litecms\Product\Repositories\Criteria;

use Litepie\Repository\Contracts\CriteriaInterface;
use Litepie\Repository\Contracts\RepositoryInterface;

class ProductResourceCriteria implements CriteriaInterface {

    public function apply($model, RepositoryInterface $repository)
    {
       
        return $model;
    }
}