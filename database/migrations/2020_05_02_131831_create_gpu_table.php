<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGpuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gpus', function (Blueprint $table) {
            $table->id('gpu_id');
            $table->unsignedBigInteger('manufacturer_id');
            $table->integer('core_clock');
            $table->integer('g_memory');
            $table->decimal('price');
            $table->integer('boost_clock');
            $table->timestamps();

            //fk
            $table->foreign('manufacturer_id')->references('manufacturer_id')->on('manufacturers');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gpus');
    }
}
