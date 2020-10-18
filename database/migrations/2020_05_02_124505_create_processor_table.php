<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcessorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processors', function (Blueprint $table) {
            $table->id('proc_id');
            $table->unsignedBigInteger('manufacturer_id');
            $table->string('name');
            $table->string('platform');
            $table->decimal('price');
            $table->decimal('core_clock');
            $table->integer('core_count');
            $table->decimal('boost_clock');
            $table->integer('TDP');
            $table->string('series');
            $table->string('architecture');
            $table->timestamps();

            //FK
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
        Schema::dropIfExists('processors');
    }
}
