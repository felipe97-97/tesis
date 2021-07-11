<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Odontograma extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $table = 'odontogramas';

    protected $filleable = ['numero','pieza','estado','estado_clase','profundidad','profundidad_clase','id_ficha'];


     //relaciones

     public function ficha() {
    	return $this->belongsTo(Ficha::class, 'id_ficha', 'id');
    }
}
