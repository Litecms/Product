<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration
{
    /*
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {

        /*
         * Table: products
         */
        Schema::create(config('litecms.product.product.model.table'), function ($table) {
            $table->increments('id');
            $table->mediumText('title')->nullable();
            $table->integer('category_id')->nullable();
            $table->longText('discription')->nullable();
            $table->longText('summary')->nullable();
            $table->longText('features')->nullable();
            $table->text('tags')->nullable();
            $table->text('model')->nullable();
            $table->text('meta_title')->nullable();
            $table->mediumText('meta_discription')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->string('sku', 8)->nullable();
            $table->integer('upc')->nullable();
            $table->integer('ean')->nullable();
            $table->integer('jan')->nullable();
            $table->integer('isbn')->nullable();
            $table->string('mpn', 7)->nullable();
            $table->text('location')->nullable();
            $table->integer('price')->nullable();
            $table->string('tax', 255)->nullable();
            $table->integer('slider')->nullable();
            $table->integer('quantity')->nullable();
            $table->integer('minimum_qauantity')->nullable();
            $table->enum('subtract_stock', ['yes','no'])->nullable();
            $table->enum('stock_status', ['2-3 days','In Stock','Out of Stock','Pre-Order'])->nullable();
            $table->enum('shipping', ['yes','no'])->nullable();
            $table->date('date_available')->nullable();
            $table->string('dimensions', 255)->nullable();
            $table->enum('dimension_class', ['Centimeter','Millimeter','Inch'])->nullable();
            $table->integer('weight')->nullable();
            $table->enum('weight_class', ['Kilogram','gram','pound','ounce'])->nullable();
            $table->integer('sort_order')->nullable();
            $table->string('related_products', 255)->nullable();
            $table->string('discount', 255)->nullable();
            $table->string('images', 2555)->nullable();
            $table->string('slug', 255)->nullable();
            $table->enum('status', ['show','hide'])->nullable();
            $table->integer('user_id')->nullable();
            $table->text('user_type')->nullable();
            $table->integer('upload_folder')->nullable();
            $table->softDeletes();
            $table->nullableTimestamps();
        });
    }

    /*
    * Reverse the migrations.
    *
    * @return void
    */

    public function down()
    {
        Schema::drop(config('litecms.product.product.model.table'));
    }
}
