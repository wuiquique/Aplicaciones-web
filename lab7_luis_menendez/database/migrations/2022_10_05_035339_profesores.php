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
        Schema::create('profesores', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigIncrements('profesor_id');
            $table->string('profesor_nombre');
            $table->integer('profesor_dpi');
            $table->string('profesor_direccion');
            $table->integer('profesor_telefono');
            $table->date('profesor_birth');
            $table->bigInteger('genero_id')->unsigned();
            $table->bigInteger('grado_id')->unsigned();
            $table->bigInteger('zona_id')->unsigned();
            $table->timestamps();
            $table->foreign('genero_id')->references('genero_id')->on('generos')->onDelete("RESTRICT");
            $table->foreign('grado_id')->references('grado_id')->on('grado_academico')->onDelete("RESTRICT");
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
