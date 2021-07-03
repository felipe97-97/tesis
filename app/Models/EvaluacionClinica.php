<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluacionClinica extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $table = 'evaluacion_clinicas';

    protected $filleable = ['fecha','actividad','id_ficha'];
}
