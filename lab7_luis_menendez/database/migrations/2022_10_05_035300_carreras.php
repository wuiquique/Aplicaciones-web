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
        Schema::create('carreras', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigIncrements('carrera_id');
            $table->string('carrera_nombre');
            $table->bigInteger('facultad_id')->unsigned();
            $table->timestamps();
            $table->foreign('facultad_id')->references('facultad_id')->on('facultades')->onDelete("RESTRICT");
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
