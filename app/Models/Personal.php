<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $table = 'personals';

    protected $filleable = ['nombre','apellido','rut','correo','telefono','direccion','cargo'];

}
