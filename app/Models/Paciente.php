<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $table = 'pacientes';

    protected $filleable = ['nombre','apellido','rut','sexo','fecha_nacimiento','ocupacion','correo','telefono','direccion','tutor','parentesco','contacto_emergencia'];


    //relaciones

    public function ficha() {
    	return $this->belongsTo(Ficha::class, 'id', 'id_paciente');
    }

    public function agendas() {
    	return $this->hasMany(Agenda::class, 'id_paciente');
    }

}
