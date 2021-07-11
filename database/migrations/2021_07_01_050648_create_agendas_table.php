<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendas', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->date('day');
            $table->time('start_date');
            $table->time('end_date');
            $table->timestamps();

            //Declaración de clave foranea//
            $table->bigInteger('id_paciente')->unsigned();
            $table->foreign('id_paciente')->references('id')->on('pacientes');

            $table->bigInteger('id_personal')->unsigned();
            $table->foreign('id_personal')->references('id')->on('personals');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agendas');
    }
}
