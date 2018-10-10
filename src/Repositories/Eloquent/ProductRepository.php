<?php

namespace Litecms\Product\Repositories\Eloquent;

use Litecms\Product\Interfaces\ProductRepositoryInterface;
use Litepie\Repository\Eloquent\BaseRepository;

class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{


    public function boot()
    {
        $this->fieldSearchable = config('litecms.product.product.model.search');

    }

    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        return config('litecms.product.product.model.model');
    }

    public function products($id)
    { 
        return $this->model->where('category_id', $id)->paginate();
    }
}
