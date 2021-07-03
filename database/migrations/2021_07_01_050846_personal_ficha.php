<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PersonalFicha extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_ficha', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            //Declaración de clave foranea//
            $table->bigInteger('id_ficha')->unsigned();
            $table->foreign('id_ficha')->references('id')->on('fichas');

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
        //
    }
}
