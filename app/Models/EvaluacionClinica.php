<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluacionClinica extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $table = 'evaluacion_clinicas';

    protected $fillable = ['fecha','actividad','id_ficha'];


    //relaciones

    public function ficha() {
    	return $this->belongsTo(Ficha::class, 'id_ficha', 'id');
    }
}
