<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImplementosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('implementos', function (Blueprint $table) {
            $table->id();
            $table->string('item');
            $table->string('marca');
            $table->string('codigo')->nullable();
            $table->integer('cantidad');
            $table->timestamps();

            //Declaración de clave foranea//
            $table->bigInteger('id_proveedor')->unsigned();
            $table->foreign('id_proveedor')->references('id')->on('proveedors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('implementos');
    }
}
