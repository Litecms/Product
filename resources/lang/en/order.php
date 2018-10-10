<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Language files for order in product package
    |--------------------------------------------------------------------------
    |
    | The following language lines are  for  order module in product package
    | and it is used by the template/view files in this module
    |
    */

    /**
     * Singlular and plural name of the module
     */
    'name'          => 'Order',
    'names'         => 'Orders',
    
    /**
     * Singlular and plural name of the module
     */
    'title'         => [
        'main'  => 'Orders',
        'sub'   => 'Orders',
        'list'  => 'List of orders',
        'edit'  => 'Edit order',
        'create'    => 'Create new order'
    ],

    /**
     * Options for select/radio/check.
     */
    'options'       => [
            'payment_status'      => ['Paid','Unpaid'],
            'payment_methods'     => ['Cash on delivery' => 'Cash on delivery','Debit card' => 'Debit card','Credit Card' => 'Credit Card'],
    ],

    /**
     * Placeholder for inputs
     */
    'placeholder'   => [
        'id'                         => 'Please enter id',
        'name'                       => 'Please enter name',
        'address'                    => 'Please enter address',
        'track_status'               => 'Please enter track status',
        'product_id'                 => 'Please enter product id',
        'subtotal'                   => 'Please enter subtotal',
        'tax'                        => 'Please enter tax',
        'total'                      => 'Please enter total',
        'payment_status'             => 'Please select payment status',
        'payment_methods'            => 'Please select payment methods',
        'payment_details'            => 'Please enter payment details',
        'created_at'                 => 'Please select created at',
        'updated_at'                 => 'Please select updated at',
        'deleted_at'                 => 'Please select deleted at',
    ],

    /**
     * Labels for inputs.
     */
    'label'         => [
        'id'                         => 'Id',
        'name'                       => 'Name',
        'address'                    => 'Address',
        'track_status'               => 'Track status',
        'product_id'                 => 'Product id',
        'subtotal'                   => 'Subtotal',
        'tax'                        => 'Tax',
        'total'                      => 'Total',
        'payment_status'             => 'Payment status',
        'payment_methods'            => 'Payment methods',
        'payment_details'            => 'Payment details',
        'created_at'                 => 'Created at',
        'updated_at'                 => 'Updated at',
        'deleted_at'                 => 'Deleted at',
    ],

    /**
     * Columns array for show hide checkbox.
     */
    'cloumns'         => [
        'name'                       => ['name' => 'Name', 'data-column' => 1, 'checked'],
        'address'                    => ['name' => 'Address', 'data-column' => 2, 'checked'],
        'track_status'               => ['name' => 'Track status', 'data-column' => 3, 'checked'],
        'subtotal'                   => ['name' => 'Subtotal', 'data-column' => 4, 'checked'],
        'total'                      => ['name' => 'Total', 'data-column' => 5, 'checked'],
        'payment_status'             => ['name' => 'Payment status', 'data-column' => 6, 'checked'],
        'payment_methods'            => ['name' => 'Payment methods', 'data-column' => 7, 'checked'],
    ],

    /**
     * Tab labels
     */
    'tab'           => [
        'name'  => 'Orders',
    ],

    /**
     * Texts  for the module
     */
    'text'          => [
        'preview' => 'Click on the below list for preview',
    ],
];
