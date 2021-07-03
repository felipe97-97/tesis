<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvaluacionClinicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluacion_clinicas', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->string('actividad');
            $table->timestamps();

            //Declaración de clave foranea//
            $table->bigInteger('id_ficha')->unsigned();
            $table->foreign('id_ficha')->references('id')->on('fichas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evaluacion_clinicas');
    }
}
