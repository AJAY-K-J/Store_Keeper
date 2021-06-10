<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table->date('product_date');
            $table->string('product_supplier_id');
            $table->string('section_id');
            $table->string('item_id');

            $table->float('quantity');
            $table->float('price');

            $table->string('invoice');
            $table->string('Dc_no');

            $table->date('Dc_date');


            $table->string('arrivals_page_no')->default(0);

            $table->string('gir_page_no')->default(0);

            $table->string('category_book');
            $table->string('category_book_page_no')->default(0);
            $table->string('purchase_order_no');
            $table->date('purchase_order_date');
            $table->text('remarks')->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stocks');
    }
}
