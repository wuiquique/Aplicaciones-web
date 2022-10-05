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
        Schema::create('municipios', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigIncrements('municipio_id');
            $table->string('municipio_nombre');
            $table->bigInteger('departamento_id')->unsigned();
            $table->timestamps();
            $table->foreign('departamento_id')->references('departamento_id')->on('departamentos')->onDelete("RESTRICT");
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
