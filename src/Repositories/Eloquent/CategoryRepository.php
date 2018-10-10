<?php

namespace Litecms\Product\Repositories\Eloquent;

use Litecms\Product\Interfaces\CategoryRepositoryInterface;
use Litepie\Repository\Eloquent\BaseRepository;

class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface
{


    public function boot()
    {
        $this->fieldSearchable = config('litecms.product.category.model.search');

    }

    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        return config('litecms.product.category.model.model');
    }

    public function categories()
    {
        return $this->model->pluck('name', 'id');
    }

    public function asidecategories()
    {
        return $this->model->get();
    }
}
