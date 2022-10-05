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
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigIncrements('estudiante_id');
            $table->string('estudiante_nombre');
            $table->integer('estudiante_dpi');
            $table->string('estudiante_direccion');
            $table->integer('estudiante_telefono');
            $table->date('estudiante_birth');
            $table->bigInteger('genero_id')->unsigned();
            $table->bigInteger('carrera_id')->unsigned();
            $table->bigInteger('zona_id')->unsigned();
            $table->timestamps();
            $table->foreign('genero_id')->references('genero_id')->on('generos')->onDelete("RESTRICT");
            $table->foreign('carrera_id')->references('carrera_id')->on('carreras')->onDelete("RESTRICT");
            $table->foreign('zona_id')->references('zona_id')->on('zonas')->onDelete("RESTRICT");
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
