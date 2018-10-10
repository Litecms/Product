<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Language files for product in product package
    |--------------------------------------------------------------------------
    |
    | The following language lines are  for  product module in product package
    | and it is used by the template/view files in this module
    |
    */

    /**
     * Singlular and plural name of the module
     */
    'name'          => 'Product',
    'names'         => 'Products',
    
    /**
     * Singlular and plural name of the module
     */
    'title'         => [
        'main'  => 'Products',
        'sub'   => 'Products',
        'list'  => 'List of products',
        'edit'  => 'Edit product',
        'create'    => 'Create new product'
    ],

    /**
     * Options for select/radio/check.
     */
    'options'       => [
            'stock_status'        => ['2-3 days' => '2-3 days','In Stock' => 'In Stock','Out of Stock' => 'Out of Stock','Pre-Order' => 'Pre-Order'],
            'status'              => ['show' => 'show','hide' => 'hide'],
    ],

    /**
     * Placeholder for inputs
     */
    'placeholder'   => [
        'id'                         => 'Please enter id',
        'title'                      => 'Please enter title',
        'discription'                => 'Please enter discription',
        'summary'                    => 'Please enter summary',
        'features'                   => 'Please enter features',
        'tags'                       => 'Please enter tags',
        'model'                      => 'Please enter model',
        'meta_title'                 => 'Please enter meta title',
        'meta_discription'           => 'Please enter meta discription',
        'meta_keywords'              => 'Please enter meta keywords',
        'sku'                        => 'Please enter sku',
        'upc'                        => 'Please enter upc',
        'ean'                        => 'Please enter ean',
        'jan'                        => 'Please enter jan',
        'isbn'                       => 'Please enter isbn',
        'mpn'                        => 'Please enter mpn',
        'location'                   => 'Please enter location',
        'price'                      => 'Please enter price',
        'tax'                        => 'Please enter tax',
        'slider'                     => 'Please enter slider',
        'quantity'                   => 'Please enter quantity',
        'minimum_qauantity'          => 'Please enter minimum qauantity',
        'subtract_stock'             => 'Please select subtract stock',
        'stock_status'               => 'Please select stock status',
        'shipping'                   => 'Please select shipping',
        'date_available'             => 'Please select date available',
        'dimensions'                 => 'Please enter dimensions',
        'dimension_class'            => 'Please select dimension class',
        'weight'                     => 'Please enter weight',
        'weight_class'               => 'Please select weight class',
        'sort_order'                 => 'Please enter sort order',
        'related_products'           => 'Please enter related products',
        'discount'                   => 'Please enter discount',
        'images'                     => 'Please enter images',
        'slug'                       => 'Please enter slug',
        'status'                     => 'Please select status',
        'user_id'                    => 'Please enter user id',
        'user_type'                  => 'Please enter user type',
        'upload_folder'              => 'Please enter upload folder',
        'created_at'                 => 'Please select created at',
        'updated_at'                 => 'Please select updated at',
        'deleted_at'                 => 'Please select deleted at',
    ],

    /**
     * Labels for inputs.
     */
    'label'         => [
        'id'                         => 'Id',
        'title'                      => 'Title',
        'discription'                => 'Discription',
        'summary'                    => 'Summary',
        'features'                   => 'Features',
        'tags'                       => 'Tags',
        'model'                      => 'Model',
        'meta_title'                 => 'Meta title',
        'meta_discription'           => 'Meta discription',
        'meta_keywords'              => 'Meta keywords',
        'sku'                        => 'Sku',
        'upc'                        => 'Upc',
        'ean'                        => 'Ean',
        'jan'                        => 'Jan',
        'isbn'                       => 'Isbn',
        'mpn'                        => 'Mpn',
        'location'                   => 'Location',
        'price'                      => 'Price',
        'tax'                        => 'Tax',
        'slider'                     => 'Slider',
        'quantity'                   => 'Quantity',
        'minimum_qauantity'          => 'Minimum qauantity',
        'subtract_stock'             => 'Subtract stock',
        'stock_status'               => 'Stock status',
        'shipping'                   => 'Shipping',
        'date_available'             => 'Date available',
        'dimensions'                 => 'Dimensions',
        'dimension_class'            => 'Dimension class',
        'weight'                     => 'Weight',
        'weight_class'               => 'Weight class',
        'sort_order'                 => 'Sort order',
        'related_products'           => 'Related products',
        'discount'                   => 'Discount',
        'images'                     => 'Images',
        'slug'                       => 'Slug',
        'status'                     => 'Status',
        'user_id'                    => 'User id',
        'user_type'                  => 'User type',
        'upload_folder'              => 'Upload folder',
        'created_at'                 => 'Created at',
        'updated_at'                 => 'Updated at',
        'deleted_at'                 => 'Deleted at',
    ],

    /**
     * Columns array for show hide checkbox.
     */
    'cloumns'         => [
        'title'                      => ['name' => 'Title', 'data-column' => 1, 'checked'],
        'price'                      => ['name' => 'Price', 'data-column' => 2, 'checked'],
        'tax'                        => ['name' => 'Tax', 'data-column' => 3, 'checked'],
        'quantity'                   => ['name' => 'Quantity', 'data-column' => 4, 'checked'],
        'stock_status'               => ['name' => 'Stock status', 'data-column' => 5, 'checked'],
        'discount'                   => ['name' => 'Discount', 'data-column' => 6, 'checked'],
        'images'                     => ['name' => 'Images', 'data-column' => 7, 'checked'],
        'status'                     => ['name' => 'Status', 'data-column' => 8, 'checked'],
    ],

    /**
     * Tab labels
     */
    'tab'           => [
        'name'  => 'Products',
    ],

    /**
     * Texts  for the module
     */
    'text'          => [
        'preview' => 'Click on the below list for preview',
    ],
];
