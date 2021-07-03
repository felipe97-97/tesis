<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Odontograma extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $table = 'odontogramas';

    protected $filleable = ['pieza','estado','id_ficha'];
}
