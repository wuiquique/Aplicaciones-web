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
        Schema::create('facultad_curso', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigIncrements('facu_curso_id');
            $table->bigInteger('facultad_id')->unsigned();
            $table->bigInteger('curso_id')->unsigned();
            $table->timestamps();
            $table->foreign('facultad_id')->references('facultad_id')->on('facultades')->onDelete("RESTRICT");
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
