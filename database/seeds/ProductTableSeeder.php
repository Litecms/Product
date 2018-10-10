<?php

namespace Litecms;

use DB;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    public function run()
    {
        DB::table(config('litecms.product.product.model.table'))->insert([
            ['id' => '1', 'title' => 'Canon EOS 5D', 'category_id' => '1', 'discription' => '<p><span style="color: rgb(102, 102, 102); font-family: &quot;open sans&quot;, sans-serif; font-size: 12px;">Canon\'s press material for the EOS 5D states that it \'defines (a) new D-SLR category\', while we\'re not typically too concerned with marketing talk this particular statement is clearly pretty accurate. The EOS 5D is unlike any previous digital SLR in that it combines a full-frame (35 mm sized) high resolution sensor (12.8 megapixels) with a relatively compact body (slightly larger than the EOS 20D, although in your hand it feels noticeably \'chunkier\'). The EOS 5D is aimed to slot in between the EOS 20D and the EOS-1D professional digital SLR\'s, an important difference when compared to the latter is that the EOS 5D doesn\'t have any environmental seals. While Canon don\'t specifically refer to the EOS 5D as a \'professional\' digital SLR it will have obvious appeal to professionals who want a high quality digital SLR in a body lighter than the EOS-1D. It will also no doubt appeal to current EOS 20D owners (although lets hope they\'ve not bought too many EF-S lenses...) äë</span><br></p>', 'summary' => null, 'features' => '<p><br></p>', 'tags' => null, 'model' => null, 'meta_title' => null, 'meta_discription' => null, 'meta_keywords' => null, 'sku' => null, 'upc' => null, 'ean' => null, 'jan' => null, 'isbn' => null, 'mpn' => null, 'location' => null, 'price' => '98.00', 'tax' => '2', 'slider' => null, 'quantity' => null, 'minimum_qauantity' => null, 'subtract_stock' => null, 'stock_status' => 'In Stock', 'shipping' => null, 'date_available' => null, 'dimensions' => null, 'dimension_class' => null, 'weight' => null, 'weight_class' => null, 'sort_order' => null, 'related_products' => null, 'discount' => null, 'images' => '[{"title":"Canon eos 5d 2 500x500 1","caption":"Canon eos 5d 2 500x500 1","url":"Canon eos 5d 2 500x500 1","desc":null,"folder":"2018\\/10\\/10\\/092140434\\/images","time":"2018-10-10 09:22:19","path":"product\\/product\\/2018\\/10\\/10\\/092140434\\/images\\/canon-eos-5d-2-500x500-1.jpg","file":"canon-eos-5d-2-500x500-1.jpg"}]', 'slug' => 'Canon_EOS5D', 'status' => 'show', 'user_id' => '1', 'user_type' => 'App\\User', 'upload_folder' => null, 'created_at' => '2018-10-10 05:39:59', 'updated_at' => '2018-10-10 09:22:22', 'deleted_at' => null],
            ['id' => '2', 'title' => 'Samsung Galaxy Tab 10.1', 'category_id' => '2', 'discription' => '<p style="-webkit-font-smoothing: antialiased; text-rendering: optimizeLegibility; margin-bottom: 1rem; line-height: 28px; color: rgb(102, 102, 102); font-size: 12px; font-family: &quot;open sans&quot;, sans-serif;">Samsung Galaxy Tab 10.1, is the world’s thinnest tablet, measuring 8.6 mm thickness, running with Android 3.0 Honeycomb OS on a 1GHz dual-core Tegra 2 processor, similar to its younger brother Samsung Galaxy Tab 8.9.</p><p style="-webkit-font-smoothing: antialiased; text-rendering: optimizeLegibility; margin-bottom: 1rem; line-height: 28px; color: rgb(102, 102, 102); font-size: 12px; font-family: &quot;open sans&quot;, sans-serif;">Samsung Galaxy Tab 10.1 gives pure Android 3.0 experience, adding its new TouchWiz UX or TouchWiz 4.0 – includes a live panel, which lets you to customize with different content, such as your pictures, bookmarks, and social feeds, sporting a 10.1 inches WXGA capacitive touch screen with 1280 x 800 pixels of resolution, equipped with 3 megapixel rear camera with LED flash and a 2 megapixel front camera, HSPA+ connectivity up to 21Mbps, 720p HD video recording capability, 1080p HD playback, DLNA support, Bluetooth 2.1, USB 2.0, gyroscope, Wi-Fi 802.11 a/b/g/n, micro-SD slot, 3.5mm headphone jack, and SIM slot, including the Samsung Stick – a Bluetooth microphone that can be carried in a pocket like a pen and sound dock with powered subwoofer.</p><p style="-webkit-font-smoothing: antialiased; text-rendering: optimizeLegibility; margin-bottom: 1rem; line-height: 28px; color: rgb(102, 102, 102); font-size: 12px; font-family: &quot;open sans&quot;, sans-serif;">Samsung Galaxy Tab 10.1 will come in 16GB / 32GB / 64GB verities and pre-loaded with Social Hub, Reader’s Hub, Music Hub and Samsung Mini Apps Tray – which gives you access to more commonly used apps to help ease multitasking and it is capable of Adobe Flash Player 10.2, powered by 6860mAh battery that gives you 10hours of video-playback time.&nbsp;äö</p>', 'summary' => null, 'features' => '<p><br></p>', 'tags' => null, 'model' => null, 'meta_title' => null, 'meta_discription' => null, 'meta_keywords' => null, 'sku' => null, 'upc' => null, 'ean' => null, 'jan' => null, 'isbn' => null, 'mpn' => null, 'location' => null, 'price' => '241.00', 'tax' => '1', 'slider' => null, 'quantity' => '1', 'minimum_qauantity' => null, 'subtract_stock' => null, 'stock_status' => 'Out of Stock', 'shipping' => null, 'date_available' => null, 'dimensions' => null, 'dimension_class' => null, 'weight' => null, 'weight_class' => null, 'sort_order' => null, 'related_products' => null, 'discount' => null, 'images' => '[{"title":"Samsung tab 1 500x500","caption":"Samsung tab 1 500x500","url":"Samsung tab 1 500x500","desc":null,"folder":"2018\\/10\\/10\\/092402241\\/images","time":"2018-10-10 09:24:07","path":"product\\/product\\/2018\\/10\\/10\\/092402241\\/images\\/samsung-tab-1-500x500.jpg","file":"samsung-tab-1-500x500.jpg"},{"title":"Samsung tab 7 500x500","caption":"Samsung tab 7 500x500","url":"Samsung tab 7 500x500","desc":null,"folder":"2018\\/10\\/10\\/092402241\\/images","time":"2018-10-10 09:24:10","path":"product\\/product\\/2018\\/10\\/10\\/092402241\\/images\\/samsung-tab-7-500x500.jpg","file":"samsung-tab-7-500x500.jpg"}]', 'slug' => 'Samsung-Galaxy-Tab-10.1', 'status' => 'show', 'user_id' => '1', 'user_type' => 'App\\User', 'upload_folder' => null, 'created_at' => '2018-10-10 06:05:21', 'updated_at' => '2018-10-10 09:24:50', 'deleted_at' => null],
            ['id' => '3', 'title' => 'iPod Shuffle', 'category_id' => '3', 'discription' => '<p style="-webkit-font-smoothing: antialiased; text-rendering: optimizeLegibility; margin-bottom: 1rem; line-height: 28px; color: rgb(102, 102, 102); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 12px;"><span style="-webkit-font-smoothing: antialiased; text-rendering: optimizeLegibility; margin-right: 15px; font-weight: 700; font-family: &quot;open sans&quot;, sans-serif;">Born to be worn.</span><span style="-webkit-font-smoothing: antialiased; text-rendering: optimizeLegibility; margin-right: 15px; font-family: &quot;open sans&quot;, sans-serif;"></span></p><p style="-webkit-font-smoothing: antialiased; text-rendering: optimizeLegibility; margin-bottom: 1rem; line-height: 28px; color: rgb(102, 102, 102); font-size: 12px; font-family: &quot;open sans&quot;, sans-serif;">Clip on the worlds most wearable music player and take up to 240 songs with you anywhere. Choose from five colors including four new hues to make your musical fashion statement.</p><p style="-webkit-font-smoothing: antialiased; text-rendering: optimizeLegibility; margin-bottom: 1rem; line-height: 28px; color: rgb(102, 102, 102); font-size: 12px; font-family: &quot;open sans&quot;, sans-serif;"><span style="-webkit-font-smoothing: antialiased; text-rendering: optimizeLegibility; margin-right: 15px; font-weight: 700;">Random meets rhythm.</span></p><p style="-webkit-font-smoothing: antialiased; text-rendering: optimizeLegibility; margin-bottom: 1rem; line-height: 28px; color: rgb(102, 102, 102); font-size: 12px; font-family: &quot;open sans&quot;, sans-serif;">With iTunes autofill, iPod shuffle can deliver a new musical experience every time you sync. For more randomness, you can shuffle songs during playback with the slide of a switch.</p><p style="-webkit-font-smoothing: antialiased; text-rendering: optimizeLegibility; margin-bottom: 1rem; line-height: 28px; color: rgb(102, 102, 102); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 12px;"><span style="-webkit-font-smoothing: antialiased; text-rendering: optimizeLegibility; margin-right: 15px; font-weight: 700; font-family: &quot;open sans&quot;, sans-serif;">Everything is easy.</span><span style="-webkit-font-smoothing: antialiased; text-rendering: optimizeLegibility; margin-right: 15px; font-family: &quot;open sans&quot;, sans-serif;"></span></p><p style="-webkit-font-smoothing: antialiased; text-rendering: optimizeLegibility; margin-bottom: 1rem; line-height: 28px; color: rgb(102, 102, 102); font-size: 12px; font-family: &quot;open sans&quot;, sans-serif;">Charge and sync with the included USB dock. Operate the iPod shuffle controls with one hand. Enjoy up to 12 hours straight of skip-free music playback.</p>', 'summary' => null, 'features' => '<p><br></p>', 'tags' => null, 'model' => null, 'meta_title' => null, 'meta_discription' => null, 'meta_keywords' => null, 'sku' => null, 'upc' => null, 'ean' => null, 'jan' => null, 'isbn' => null, 'mpn' => null, 'location' => null, 'price' => '122.00', 'tax' => '1', 'slider' => null, 'quantity' => '1', 'minimum_qauantity' => null, 'subtract_stock' => null, 'stock_status' => 'Pre-Order', 'shipping' => null, 'date_available' => null, 'dimensions' => null, 'dimension_class' => null, 'weight' => null, 'weight_class' => null, 'sort_order' => null, 'related_products' => null, 'discount' => null, 'images' => '[{"title":"Ipod shuffle 1 500x500","caption":"Ipod shuffle 1 500x500","url":"Ipod shuffle 1 500x500","desc":null,"folder":"2018\\/10\\/10\\/092610265\\/images","time":"2018-10-10 09:26:26","path":"product\\/product\\/2018\\/10\\/10\\/092610265\\/images\\/ipod-shuffle-1-500x500.jpg","file":"ipod-shuffle-1-500x500.jpg"},{"title":"Ipod shuffle 2 500x500","caption":"Ipod shuffle 2 500x500","url":"Ipod shuffle 2 500x500","desc":null,"folder":"2018\\/10\\/10\\/092610265\\/images","time":"2018-10-10 09:26:28","path":"product\\/product\\/2018\\/10\\/10\\/092610265\\/images\\/ipod-shuffle-2-500x500.jpg","file":"ipod-shuffle-2-500x500.jpg"}]', 'slug' => 'iPod-Shuffle', 'status' => 'show', 'user_id' => '1', 'user_type' => 'App\\User', 'upload_folder' => null, 'created_at' => '2018-10-10 05:40:06', 'updated_at' => '2018-10-10 09:26:30', 'deleted_at' => null],
        ]);

        DB::table('permissions')->insert([
            [
                'slug' => 'product.product.view',
                'name' => 'View Product',
            ],
            [
                'slug' => 'product.product.create',
                'name' => 'Create Product',
            ],
            [
                'slug' => 'product.product.edit',
                'name' => 'Update Product',
            ],
            [
                'slug' => 'product.product.delete',
                'name' => 'Delete Product',
            ],

        ]);

        DB::table('menus')->insert([

            [
                'parent_id'   => 1,
                'key'         => null,
                'url'         => 'admin/product/product',
                'name'        => 'Product',
                'description' => null,
                'icon'        => 'fa fa-newspaper-o',
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],

            [
                'parent_id'   => 2,
                'key'         => null,
                'url'         => 'user/product/product',
                'name'        => 'Product',
                'description' => null,
                'icon'        => 'icon-book-open',
                'target'      => null,
                'order'       => 190,
                'status'      => 1,
            ],

            [
                'parent_id'   => 3,
                'key'         => null,
                'url'         => 'product',
                'name'        => 'Product',
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
        'module'    => 'Product',
        'user_type' => null,
        'user_id'   => null,
        'key'       => 'product.product.key',
        'name'      => 'Some name',
        'value'     => 'Some value',
        'type'      => 'Default',
        'control'   => 'text',
        ],
         */
        ]);
    }
}
