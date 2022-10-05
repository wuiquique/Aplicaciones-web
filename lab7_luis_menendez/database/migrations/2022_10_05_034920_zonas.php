<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('zonas', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigIncrements('zona_id');
            $table->integer('zona_numero');
            $table->bigInteger('municipio_id')->unsigned();
            $table->timestamps();
            $table->foreign('municipio_id')->references('municipio_id')->on('municipios')->onDelete("RESTRICT");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
