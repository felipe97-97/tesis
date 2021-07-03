<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotografiasClinica extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $table = 'fotografias_clinicas';

    protected $filleable = ['fecha','archivo','id_ficha'];
}
