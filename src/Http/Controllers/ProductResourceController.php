<?php

namespace Litecms\Product\Http\Controllers;

use App\Http\Controllers\ResourceController as BaseController;
use Form;
use Litecms\Product\Http\Requests\ProductRequest;
use Litecms\Product\Interfaces\ProductRepositoryInterface;
use Litecms\Product\Models\Product;

/**
 * Resource controller class for product.
 */
class ProductResourceController extends BaseController
{

    /**
     * Initialize product resource controller.
     *
     * @param type ProductRepositoryInterface $product
     *
     * @return null
     */
    public function __construct(ProductRepositoryInterface $product)
    {
        parent::__construct();
        $this->repository = $product;
        $this->repository
            ->pushCriteria(\Litepie\Repository\Criteria\RequestCriteria::class)
            ->pushCriteria(\Litecms\Product\Repositories\Criteria\ProductResourceCriteria::class);
    }

    /**
     * Display a list of product.
     *
     * @return Response
     */
    public function index(ProductRequest $request)
    {
        $view = $this->response->theme->listView();

        if ($this->response->typeIs('json')) {
            $function = camel_case('get-' . $view);
            return $this->repository
                ->setPresenter(\Litecms\Product\Repositories\Presenter\ProductPresenter::class)
                ->$function();
        }

        $products = $this->repository->paginate();

        return $this->response->setMetaTitle(trans('product::product.names'))
            ->view('product::product.index', true)
            ->data(compact('products'))
            ->output();
    }

    /**
     * Display product.
     *
     * @param Request $request
     * @param Model   $product
     *
     * @return Response
     */
    public function show(ProductRequest $request, Product $product)
    {

        if ($product->exists) {
            $view = 'product::product.show';
        } else {
            $view = 'product::product.new';
        }

        return $this->response->setMetaTitle(trans('app.view') . ' ' . trans('product::product.name'))
            ->data(compact('product'))
            ->view($view, true)
            ->output();
    }

    /**
     * Show the form for creating a new product.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function create(ProductRequest $request)
    {

        $product = $this->repository->newInstance([]);
        return $this->response->setMetaTitle(trans('app.new') . ' ' . trans('product::product.name')) 
            ->view('product::product.create', true) 
            ->data(compact('product'))
            ->output();
    }

    /**
     * Create new product.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(ProductRequest $request)
    {
        try {
            $attributes              = $request->all();
            $attributes['user_id']   = user_id();
            $attributes['user_type'] = user_type();
            $product                 = $this->repository->create($attributes);

            return $this->response->message(trans('messages.success.created', ['Module' => trans('product::product.name')]))
                ->code(204)
                ->status('success')
                ->url(guard_url('product/product/' . $product->getRouteKey()))
                ->redirect();
        } catch (Exception $e) {
            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('/product/product'))
                ->redirect();
        }

    }

    /**
     * Show product for editing.
     *
     * @param Request $request
     * @param Model   $product
     *
     * @return Response
     */
    public function edit(ProductRequest $request, Product $product)
    {
        return $this->response->setMetaTitle(trans('app.edit') . ' ' . trans('product::product.name'))
            ->view('product::product.edit', true)
            ->data(compact('product'))
            ->output();
    }

    /**
     * Update the product.
     *
     * @param Request $request
     * @param Model   $product
     *
     * @return Response
     */
    public function update(ProductRequest $request, Product $product)
    {
        try {
            $attributes = $request->all();

            $product->update($attributes);
            return $this->response->message(trans('messages.success.updated', ['Module' => trans('product::product.name')]))
                ->code(204)
                ->status('success')
                ->url(guard_url('product/product/' . $product->getRouteKey()))
                ->redirect();
        } catch (Exception $e) {
            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('product/product/' . $product->getRouteKey()))
                ->redirect();
        }

    }

    /**
     * Remove the product.
     *
     * @param Model   $product
     *
     * @return Response
     */
    public function destroy(ProductRequest $request, Product $product)
    {
        try {

            $product->delete();
            return $this->response->message(trans('messages.success.deleted', ['Module' => trans('product::product.name')]))
                ->code(202)
                ->status('success')
                ->url(guard_url('product/product/0'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->code(400)
                ->status('error')
                ->url(guard_url('product/product/' . $product->getRouteKey()))
                ->redirect();
        }

    }

    /**
     * Remove multiple product.
     *
     * @param Model   $product
     *
     * @return Response
     */
    public function delete(ProductRequest $request, $type)
    {
        try {
            $ids = hashids_decode($request->input('ids'));

            if ($type == 'purge') {
                $this->repository->purge($ids);
            } else {
                $this->repository->delete($ids);
            }

            return $this->response->message(trans('messages.success.deleted', ['Module' => trans('product::product.name')]))
                ->status("success")
                ->code(202)
                ->url(guard_url('product/product'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->status("error")
                ->code(400)
                ->url(guard_url('/product/product'))
                ->redirect();
        }

    }

    /**
     * Restore deleted products.
     *
     * @param Model   $product
     *
     * @return Response
     */
    public function restore(ProductRequest $request)
    {
        try {
            $ids = hashids_decode($request->input('ids'));
            $this->repository->restore($ids);

            return $this->response->message(trans('messages.success.restore', ['Module' => trans('product::product.name')]))
                ->status("success")
                ->code(202)
                ->url(guard_url('/product/product'))
                ->redirect();

        } catch (Exception $e) {

            return $this->response->message($e->getMessage())
                ->status("error")
                ->code(400)
                ->url(guard_url('/product/product/'))
                ->redirect();
        }

    }

}
