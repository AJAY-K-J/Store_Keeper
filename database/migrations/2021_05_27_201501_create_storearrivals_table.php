<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStorearrivalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('storearrivals', function (Blueprint $table) {
            $table->id();

            $table->date('date');
            $table->text('details_of_supplier');
            $table->text('description_of_item');
            $table->float('quantity');
            $table->float('price');
            $table->string('invoice_no')->default('0');
            $table->string('delivery_chellan_no');
            $table->date('date_of_delivery_chellan');
            $table->string('name_of_inspection_officer');
            $table->string('sign_of_ask')->default('1');
            $table->string('sign_of_insp_officer')->default('0');
            $table->string('sign_of_store_officer')->default('0');
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
        Schema::dropIfExists('storearrivals');
    }
}
