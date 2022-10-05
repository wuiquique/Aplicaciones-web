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
        Schema::create('profesor_curso', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigIncrements('prof_curso_id');
            $table->bigInteger('profesor_id')->unsigned();
            $table->bigInteger('curso_id')->unsigned();
            $table->timestamps();
            $table->foreign('profesor_id')->references('profesor_id')->on('profesores')->onDelete("RESTRICT");
            $table->foreign('curso_id')->references('curso_id')->on('cursos')->onDelete("RESTRICT");
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
