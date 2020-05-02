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
            $table->int('core_clock');
            $table->int('g_memory');
            $table->decimal('price');
            $table->int('boost_clock');
            $table->timestamps();

            //fk
            $table->foreign('manufacturer_id')->references('manufacturing_id')->on('manufacturers');
            
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
