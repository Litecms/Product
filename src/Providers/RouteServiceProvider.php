<?php

namespace Litecms\Product\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Routing\Router;
use Litecms\Product\Models\Product;
use Request;
use Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to the controller routes in your routes file.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'Litecms\Product\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @param   \Illuminate\Routing\Router  $router
     * @return void
     */
    public function boot()
    {
        parent::boot();

        if (Request::is('*/product/product/*')) {
            Route::bind('product', function ($product) {
                $productrepo = $this->app->make('Litecms\Product\Interfaces\ProductRepositoryInterface');
                return $productrepo->findorNew($product);
            });
        }

        if (Request::is('*/product/category/*')) {
            Route::bind('category', function ($category) {
                $categoryrepo = $this->app->make('Litecms\Product\Interfaces\CategoryRepositoryInterface');
                return $categoryrepo->findorNew($category);
            });
        }

        if (Request::is('*/product/order/*')) {
            Route::bind('order', function ($order) {
                $orderrepo = $this->app->make('Litecms\Product\Interfaces\OrderRepositoryInterface');
                return $orderrepo->findorNew($order);
            });
        }

    }

    /**
     * Define the routes for the package.
     *
     * @return void
     */
    public function map()
    {
        $this->mapWebRoutes();
    }

    /**
     * Define the "web" routes for the package.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        if (request()->segment(1) == 'api' || request()->segment(2) == 'api') {
            return;
        }
        
        Route::group([
            'middleware' => 'web',
            'namespace'  => $this->namespace,
            'prefix'     => trans_setlocale(),
        ], function ($router) {
            require (__DIR__ . '/../../routes/web.php');
        });
    }

}
