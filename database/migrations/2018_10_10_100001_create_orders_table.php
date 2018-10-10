<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdersTable extends Migration
{
    /*
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {

        /*
         * Table: orders
         */
        Schema::create(config('litecms.product.order.model.table'), function ($table) {
            $table->increments('id');
            $table->text('name')->nullable();
            $table->text('address')->nullable();
            $table->string('email', 255)->nullable();
            $table->integer('product_id')->nullable();
            $table->integer('quantity')->nullable();
            $table->integer('tax')->nullable();
            $table->integer('total')->nullable();
            $table->enum('payment_status', ['Paid','Unpaid'])->nullable();
            $table->enum('payment_methods', ['Cash on delivery','Debit card','Credit Card'])->nullable();
            $table->string('comments', 255)->nullable();
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
        Schema::drop(config('litecms.product.order.model.table'));
    }
}
