<?php

namespace Litecms;

use DB;
use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{
    public function run()
    {
        DB::table(config('litecms.product.order.model.table'))->insert([
            
        ]);

        DB::table('permissions')->insert([
            [
                'slug'      => 'product.order.view',
                'name'      => 'View Order',
            ],
            [
                'slug'      => 'product.order.create',
                'name'      => 'Create Order',
            ],
            [
                'slug'      => 'product.order.edit',
                'name'      => 'Update Order',
            ],
            [
                'slug'      => 'product.order.delete',
                'name'      => 'Delete Order',
            ],
            
            
        ]);

        DB::table('menus')->insert([

            [
                'parent_id'   => 1,
                'key'         => null,
                'url'         => 'admin/product/order',
                'name'        => 'Order',
                'description' => null,
                'icon'        => 'fa fa-newspaper-o',
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],

            [
                'parent_id'   => 2,
                'key'         => null,
                'url'         => 'user/product/order',
                'name'        => 'Order',
                'description' => null,
                'icon'        => 'icon-book-open',
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],

            [
                'parent_id'   => 3,
                'key'         => null,
                'url'         => 'order',
                'name'        => 'Order',
                'description' => null,
                'icon'        => null,
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],

        ]);

        DB::table('settings')->insert([
            // Uncomment  and edit this section for entering value to settings table.
            /*
            [
                'package'   => 'Product',
                'module'    => 'Order',
                'user_type' => null,
                'user_id'   => null,
                'key'       => 'product.order.key',
                'name'      => 'Some name',
                'value'     => 'Some value',
                'type'      => 'Default',
                'control'   => 'text',
            ],
            */
        ]);
    }
}
