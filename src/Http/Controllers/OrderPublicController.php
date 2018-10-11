<?php

namespace Litecms\Product\Http\Controllers;

use App\Http\Controllers\PublicController as BaseController;
use Litecms\Product\Interfaces\OrderRepositoryInterface;
use Litecms\Product\Interfaces\ProductRepositoryInterface;
use Illuminate\Http\Request;
class OrderPublicController extends BaseController
{
    // use OrderWorkflow;

    /**
     * Constructor.
     *
     * @param type \Litecms\Order\Interfaces\OrderRepositoryInterface $order
     *
     * @return type
     */
    public function __construct(OrderRepositoryInterface $order, ProductRepositoryInterface $product)
    {
        $this->repository = $order;
        $this->product = $product;
        parent::__construct();
    }

    /**
     * Show order's list.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function index($slug)
    { 
        $product = $this->product->findBySlug($slug);


        return $this->response->setMetaTitle(trans('product::order.names'))
            ->view('product::public.order.index')
            ->data(compact('product'))
            ->output();
    }

    /**
     * Show order's list based on a type.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function list($type = null)
    {
        $orders = $this->repository
        ->pushCriteria(app('Litepie\Repository\Criteria\RequestCriteria'))
        ->scopeQuery(function($query){
            return $query->orderBy('id','DESC');
        })->paginate();


        return $this->response->setMetaTitle(trans('product::order.names'))
            ->view('product::public.order.index')
            ->data(compact('orders'))
            ->output();
    }

    /**
     * Show order.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function show($slug)
    {
        $order = $this->repository->scopeQuery(function($query) use ($slug) {
            return $query->orderBy('id','DESC')
                         ->where('slug', $slug);
        })->first(['*']);

        return $this->response->setMetaTitle($order->name . trans('product::order.name'))
            ->view('product::public.order.show')
            ->data(compact('order'))
            ->output();
    }

    protected function orderpayment(Request $request)
    {
        $request = $request->all(); 
        $request['total'] = $request['quantity'] * $request['total'];
        $order = $this->repository->create($request); 
        return redirect()->to(url('products'));
    }

}
