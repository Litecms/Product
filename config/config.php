<?php

return [

    /**
     * Provider.
     */
    'provider'  => 'litecms',

    /*
     * Package.
     */
    'package'   => 'product',

    /*
     * Modules.
     */
    'modules'   => ['product', 
'category', 
'order'],

    'product'       => [
        'model' => [
            'model'                 => \Litecms\Product\Models\Product::class,
            'table'                 => 'products',
            'presenter'             => \Litecms\Product\Repositories\Presenter\ProductPresenter::class,
            'hidden'                => [],
            'visible'               => [],
            'guarded'               => ['*'],
            'slugs'                 => ['slug' => 'title'],
            'dates'                 => ['deleted_at', 'createdat', 'updated_at'],
            'appends'               => [],
            'fillable'              => ['id',  'title', 'category_id', 'discription',  'summary',  'features',  'tags',  'model',  'meta_title',  'meta_discription',  'meta_keywords',  'sku',  'upc',  'ean',  'jan',  'isbn',  'mpn',  'location',  'price',  'tax',  'slider',  'quantity',  'minimum_qauantity',  'subtract_stock',  'stock_status',  'shipping',  'date_available',  'dimensions',  'dimension_class',  'weight',  'weight_class',  'sort_order',  'related_products',  'discount',  'images',  'slug',  'status',  'user_id',  'user_type',  'upload_folder',  'created_at',  'updated_at',  'deleted_at'],
            'translatables'         => [],
            'upload_folder'         => 'product/product',
            'uploads'               => [
            
                    'images' => [
                        'count' => 10,
                        'type'  => 'image',
                    ],
                    'file' => [
                        'count' => 1,
                        'type'  => 'file',
                    ],
            
            ],

            'casts'                 => [
            
                'images'    => 'array',
                'file'      => 'array',
            
            ],

            'revision'              => [],
            'perPage'               => '20',
            'search'        => [
                'title'  => 'like',
                'status',
            ]
        ],

        'controller' => [
            'provider'  => 'Litecms',
            'package'   => 'Product',
            'module'    => 'Product',
        ],

    ],

    'category'       => [
        'model' => [
            'model'                 => \Litecms\Product\Models\Category::class,
            'table'                 => 'product_categories',
            'presenter'             => \Litecms\Product\Repositories\Presenter\CategoryPresenter::class,
            'hidden'                => [],
            'visible'               => [],
            'guarded'               => ['*'],
            'slugs'                 => ['slug' => 'name'],
            'dates'                 => ['deleted_at', 'createdat', 'updated_at'],
            'appends'               => [],
            'fillable'              => ['id',  'name',  'slug',  'status',  'user_type',  'user_id',  'upload_folder',  'created_at',  'updated_at',  'deleted_at'],
            'translatables'         => [],
            'upload_folder'         => 'product/category',
            'uploads'               => [
            /*
                    'images' => [
                        'count' => 10,
                        'type'  => 'image',
                    ],
                    'file' => [
                        'count' => 1,
                        'type'  => 'file',
                    ],
            */
            ],

            'casts'                 => [
            /*
                'images'    => 'array',
                'file'      => 'array',
            */
            ],

            'revision'              => [],
            'perPage'               => '20',
            'search'        => [
                'name'  => 'like',
                'status',
            ]
        ],

        'controller' => [
            'provider'  => 'Litecms',
            'package'   => 'Product',
            'module'    => 'Category',
        ],

    ],

    'order'       => [
        'model' => [
            'model'                 => \Litecms\Product\Models\Order::class,
            'table'                 => 'orders',
            'presenter'             => \Litecms\Product\Repositories\Presenter\OrderPresenter::class,
            'hidden'                => [],
            'visible'               => [],
            'guarded'               => ['*'],
            'slugs'                 => [],
            'dates'                 => ['deleted_at', 'created_at', 'updated_at'],
            'appends'               => [],
            'fillable'              => ['id',  'name',  'address',  'email',  'product_id',  'quantity',  'tax',  'total',  'payment_status',  'payment_methods',  'comments',  'created_at',  'updated_at',  'deleted_at'],
            'translatables'         => [],
            'upload_folder'         => 'product/order',
            'uploads'               => [
            /*
                    'images' => [
                        'count' => 10,
                        'type'  => 'image',
                    ],
                    'file' => [
                        'count' => 1,
                        'type'  => 'file',
                    ],
            */
            ],

            'casts'                 => [
            /*
                'images'    => 'array',
                'file'      => 'array',
            */
            ],

            'revision'              => [],
            'perPage'               => '20',
            'search'        => [
                'name'  => 'like',
                'status',
            ]
        ],

        'controller' => [
            'provider'  => 'Litecms',
            'package'   => 'Product',
            'module'    => 'Order',
        ],

    ],
];
