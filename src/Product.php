<?php

namespace Litecms\Product;

use User;

class Product
{
    /**
     * $product object.
     */
    protected $product;
    /**
     * $category object.
     */
    protected $category;
    /**
     * $order object.
     */
    protected $order;

    /**
     * Constructor.
     */
    public function __construct(\Litecms\Product\Interfaces\ProductRepositoryInterface $product,
        \Litecms\Product\Interfaces\CategoryRepositoryInterface $category,
        \Litecms\Product\Interfaces\OrderRepositoryInterface $order)
    {
        $this->product = $product;
        $this->category = $category;
        $this->order = $order;
    }

    /**
     * Returns count of product.
     *
     * @param array $filter
     *
     * @return int
     */
    public function count()
    {
        return  0;
    }

    /**
     * Make gadget View
     *
     * @param string $view
     *
     * @param int $count
     *
     * @return View
     */
    public function gadget($view = 'admin.product.gadget', $count = 10)
    {

        if (User::hasRole('user')) {
            $this->product->pushCriteria(new \Litepie\Litecms\Repositories\Criteria\ProductUserCriteria());
        }

        $product = $this->product->scopeQuery(function ($query) use ($count) {
            return $query->orderBy('id', 'DESC')->take($count);
        })->all();

        return view('product::' . $view, compact('product'))->render();
    }
    /**
     * Make gadget View
     *
     * @param string $view
     *
     * @param int $count
     *
     * @return View
     */
    // public function gadget($view = 'admin.category.gadget', $count = 10)
    // {

    //     if (User::hasRole('user')) {
    //         $this->category->pushCriteria(new \Litepie\Litecms\Repositories\Criteria\CategoryUserCriteria());
    //     }

    //     $category = $this->category->scopeQuery(function ($query) use ($count) {
    //         return $query->orderBy('id', 'DESC')->take($count);
    //     })->all();

    //     return view('product::' . $view, compact('category'))->render();
    // }
    /**
     * Make gadget View
     *
     * @param string $view
     *
     * @param int $count
     *
     * @return View
     */
    // public function gadget($view = 'admin.order.gadget', $count = 10)
    // {

    //     if (User::hasRole('user')) {
    //         $this->order->pushCriteria(new \Litepie\Litecms\Repositories\Criteria\OrderUserCriteria());
    //     }

    //     $order = $this->order->scopeQuery(function ($query) use ($count) {
    //         return $query->orderBy('id', 'DESC')->take($count);
    //     })->all();

    //     return view('product::' . $view, compact('order'))->render();
    // }

    public function categories()
    {
        $categories = $this->category->categories();
        return $categories; 
    }

     public function asidecategories()
    {
        $categories = $this->category->asidecategories();
        return $categories; 
    }
}
