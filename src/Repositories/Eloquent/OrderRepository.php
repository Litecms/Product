<?php

namespace Litecms\Product\Repositories\Eloquent;

use Litecms\Product\Interfaces\OrderRepositoryInterface;
use Litepie\Repository\Eloquent\BaseRepository;

class OrderRepository extends BaseRepository implements OrderRepositoryInterface
{


    public function boot()
    {
        $this->fieldSearchable = config('litecms.product.order.model.search');

    }

    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        return config('litecms.product.order.model.model');
    }
}
