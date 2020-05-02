<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMotheboardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motherboards', function (Blueprint $table) {
            $table->id('mobo_id');
            $table->string('name');
            $table->decimal('price');
            $table->timestamps();

            //fk
            $table->foreign('manufacturer_id')->references('manufacturing_id')->on('manufacturers');
            $table->foreign('formfactor_id')->references('formfactor_id')->on('form_factors');
            $table->foreign('platform_id')->references('platform_id')->on('platforms');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('motherboards');
    }
}
