<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $table = 'proveedors';

    protected $fillable = ['nombre','rut'];


    //relaciones

    public function implementos() {
    	return $this->hasMany(Implemento::class, 'id_proveedor');
    }

}
