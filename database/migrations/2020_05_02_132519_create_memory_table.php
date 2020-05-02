<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memory', function (Blueprint $table) {
            $table->id('mem_id');
            $table->string('name');
            $table->decimal('price');
            $table->timestamps();

            //fk
            $table->foreign('manufacturer_id')->references('manufacturing_id')->on('manufacturers');
            $table->foreign('memspeed_id')->references('memspeed_id')->on('memory_speed');           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('memory');
    }
}
