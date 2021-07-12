<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('rut')->unique();
            $table->string('sexo');
            $table->date('fecha_nacimiento');
            $table->string('ocupacion');
            $table->string('correo');
            $table->string('telefono');
            $table->string('direccion');
            $table->string('tutor')->nullable();
            $table->string('parentesco')->nullable();
            $table->string('contacto_emergencia')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pacientes');
    }
}
