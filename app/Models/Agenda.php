<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $table = 'agendas';

    protected $filleable = ['fecha','id_paciente','id_personal'];
}
