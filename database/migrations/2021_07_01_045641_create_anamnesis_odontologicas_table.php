<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnamnesisOdontologicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anamnesis_odontologicas', function (Blueprint $table) {
            $table->id();
            $table->date('ultima_consulta');
            $table->string('tratamientos_realizados');
            $table->string('reacciones_adversas');
            $table->string('habitos_higiene');
            $table->string('habitos_parafuncionales');
            $table->string('examen_tejidos_blandos');
            $table->string('observaciones');
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
        Schema::dropIfExists('anamnesis_odontologicas');
    }
}
