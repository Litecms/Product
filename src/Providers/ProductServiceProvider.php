<?php

namespace Litecms\Product\Providers;

use Illuminate\Support\ServiceProvider;

class ProductServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        // Load view
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'product');

        // Load translation
        $this->loadTranslationsFrom(__DIR__ . '/../../resources/lang', 'product');

        // Load migrations
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');

        // Call pblish redources function
        $this->publishResources();

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../../config/config.php', 'litecms.product');
        // Bind facade
        $this->app->bind('litecms.product', function ($app) {
            return $this->app->make('Litecms\Product\Product');
        });

        // Bind Product to repository
        $this->app->bind(
            'Litecms\Product\Interfaces\ProductRepositoryInterface',
            \Litecms\Product\Repositories\Eloquent\ProductRepository::class
        );
        // Bind Category to repository
        $this->app->bind(
            'Litecms\Product\Interfaces\CategoryRepositoryInterface',
            \Litecms\Product\Repositories\Eloquent\CategoryRepository::class
        );
        // Bind Order to repository
        $this->app->bind(
            'Litecms\Product\Interfaces\OrderRepositoryInterface',
            \Litecms\Product\Repositories\Eloquent\OrderRepository::class
        );

        $this->app->register(\Litecms\Product\Providers\AuthServiceProvider::class);
        
        $this->app->register(\Litecms\Product\Providers\RouteServiceProvider::class);
                
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['litecms.product'];
    }

    /**
     * Publish resources.
     *
     * @return void
     */
    private function publishResources()
    {
        // Publish configuration file
        $this->publishes([__DIR__ . '/../../config/config.php' => config_path('litecms/product.php')], 'config');

        // Publish admin view
        $this->publishes([__DIR__ . '/../../resources/views' => base_path('resources/views/vendor/product')], 'view');

        // Publish language files
        $this->publishes([__DIR__ . '/../../resources/lang' => base_path('resources/lang/vendor/product')], 'lang');
        // Publish storage files
        $this->publishes([__DIR__ . '/../../storage' => base_path('storage')], 'storage');
        
        // Publish public files and assets.
        $this->publishes([__DIR__ . '/public/' => public_path('/')], 'public');
    }
}
