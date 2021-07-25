<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anamnesis extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $table = 'anamnesis';

    protected $fillable = ['motivo_consulta','antecedentes_medicos','medicamentos','alergias','id_ficha'];


    //relaciones

    public function ficha() {
    	return $this->belongsTo(Ficha::class, 'id_ficha', 'id');
    }
}
