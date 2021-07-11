<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRadiografiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('radiografias', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->date('fecha');
            $table->binary('archivo');
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
        Schema::dropIfExists('radiografias');
    }
}
