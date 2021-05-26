<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->text('details_of_supplier');
            $table->text('description_of_item');
            $table->float('quantity');
            $table->float('price');
            $table->string('invoice_no');
            $table->string('delivery_chellan_no');
            $table->date('date_of_delivery_chellan');
            $table->string('name_of_inspection_officer');
            $table->string('sign_of_ask');
            $table->string('sign_of_insp_officer');
            $table->string('sign_of_store_officer');
            $table->text('remarks');

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
        Schema::dropIfExists('purchases');
    }
}
