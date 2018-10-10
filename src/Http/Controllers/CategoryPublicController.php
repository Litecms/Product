<?php

namespace Litecms\Product\Http\Controllers;

use App\Http\Controllers\PublicController as BaseController;
use Litecms\Product\Interfaces\CategoryRepositoryInterface;
use Litecms\Product\Interfaces\ProductRepositoryInterface;

class CategoryPublicController extends BaseController
{
    // use CategoryWorkflow;

    /**
     * Constructor.
     *
     * @param type \Litecms\Category\Interfaces\CategoryRepositoryInterface $category
     *
     * @return type
     */
    public function __construct(CategoryRepositoryInterface $category, ProductRepositoryInterface $product)
    {
        $this->repository = $category;
        $this->product = $product;
        parent::__construct();
    }

    /**
     * Show category's list.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function index()
    {
        $categories = $this->repository
        ->pushCriteria(app('Litepie\Repository\Criteria\RequestCriteria'))
        ->scopeQuery(function($query){
            return $query->orderBy('id','DESC');
        })->paginate();


        return $this->response->title(trans('product::category.names'))
            ->view('product::public.category.index')
            ->data(compact('categories'))
            ->output();
    }

    /**
     * Show category's list based on a type.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function list($type = null)
    {
        $categories = $this->repository
        ->pushCriteria(app('Litepie\Repository\Criteria\RequestCriteria'))
        ->scopeQuery(function($query){
            return $query->orderBy('id','DESC');
        })->paginate();


        return $this->response->title(trans('product::category.names'))
            ->view('product::public.category.index')
            ->data(compact('categories'))
            ->output();
    }

    /**
     * Show category.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function show($slug)
    { 
        $category = $this->repository->findBySlug($slug);
        $products = $this->product->products($category['id']);
        return $this->response->title(trans('product::category.name'))
            ->view('product::public.product.index')
            ->data(compact('products'))
            ->output();
    }

}
