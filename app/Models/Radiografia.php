<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Radiografia extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $table = 'radiografias';

    protected $filleable = ['fecha','archivo','id_ficha'];
}
