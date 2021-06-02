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
            $table->text('supplier');

            $table->text('description_of_item');
            $table->string('item_name');

            $table->float('quantity');
            $table->float('price');

            $table->string('invoice')->default('0');
            $table->string('Dc_no');

            $table->date('Dc_date');
            $table->string('section');

            $table->string('section_officer');
            $table->string('sign_of_ask')->default('1');

            $table->string('sign_of_insp_officer')->default('0');
            $table->string('store_officer')->default('0');
            
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
