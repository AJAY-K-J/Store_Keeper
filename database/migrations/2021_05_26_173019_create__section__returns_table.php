<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionReturnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_section__returns', function (Blueprint $table) {
            $table->id();
            $table->string('section_id');
            $table->string('catagory_id');
            $table->string('product_id');
            $table->string('quantity');
            $table->string('return_remarks');
            $table->string('return_status');
            $table->string('status');
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
        Schema::dropIfExists('_section__returns');
    }
}
