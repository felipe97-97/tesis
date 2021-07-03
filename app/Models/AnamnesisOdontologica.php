<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnamnesisOdontologica extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $table = 'anamnesis_odontologicas';

    protected $filleable = ['ultima_consulta','tratamientos_realizados','reacciones_adversas','habitos_higiene','habitos_parafuncionales','examen_tejidos_blandos','observaciones','id_ficha'];

    //relaciones

    public function ficha() {
    	return $this->belongsTo(Ficha::class, 'id_ficha', 'id');
    }
}
