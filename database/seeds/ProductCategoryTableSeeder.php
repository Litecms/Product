<?php

namespace Litecms;

use DB;
use Illuminate\Database\Seeder;

class ProductCategoryTableSeeder extends Seeder
{
    public function run()
    {
        DB::table(config('litecms.product.category.model.table'))->insert([
            ['id' => '1', 'name' => 'Cameras', 'slug' => 'cameras', 'status' => 'show', 'user_type' => 'App\\User', 'user_id' => '1', 'upload_folder' => null, 'created_at' => '2018-10-10 09:14:20', 'updated_at' => '2018-10-10 09:14:20', 'deleted_at' => null],
            ['id' => '2', 'name' => 'Tablets', 'slug' => 'tablets', 'status' => 'show', 'user_type' => 'App\\User', 'user_id' => '1', 'upload_folder' => null, 'created_at' => '2018-10-10 09:14:34', 'updated_at' => '2018-10-10 09:14:34', 'deleted_at' => null],
            ['id' => '3', 'name' => 'MP3 Players', 'slug' => 'mp3-players', 'status' => 'show', 'user_type' => 'App\\User', 'user_id' => '1', 'upload_folder' => null, 'created_at' => '2018-10-10 09:14:46', 'updated_at' => '2018-10-10 09:14:46', 'deleted_at' => null],
        ]);

        DB::table('permissions')->insert([
            [
                'slug' => 'product.category.view',
                'name' => 'View Category',
            ],
            [
                'slug' => 'product.category.create',
                'name' => 'Create Category',
            ],
            [
                'slug' => 'product.category.edit',
                'name' => 'Update Category',
            ],
            [
                'slug' => 'product.category.delete',
                'name' => 'Delete Category',
            ],

        ]);

        DB::table('menus')->insert([

            [
                'parent_id'   => 1,
                'key'         => null,
                'url'         => 'admin/product/category',
                'name'        => 'Category',
                'description' => null,
                'icon'        => 'fa fa-newspaper-o',
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],

            [
                'parent_id'   => 2,
                'key'         => null,
                'url'         => 'user/product/category',
                'name'        => 'Category',
                'description' => null,
                'icon'        => 'icon-book-open',
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],

            [
                'parent_id'   => 3,
                'key'         => null,
                'url'         => 'category',
                'name'        => 'Category',
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
        'pacakge'   => 'Product',
        'module'    => 'Category',
        'user_type' => null,
        'user_id'   => null,
        'key'       => 'product.category.key',
        'name'      => 'Some name',
        'value'     => 'Some value',
        'type'      => 'Default',
        'control'   => 'text',
        ],
         */
        ]);
    }
}
