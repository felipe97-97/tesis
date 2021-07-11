<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $table = 'agendas';

    protected $filleable = ['title','day','start_date','end_date','id_paciente','id_personal'];


     //relaciones

     public function paciente() {
    	return $this->belongsTo(Paciente::class, 'id_paciente', 'id');
    }

    public function personal() {
    	return $this->belongsTo(Personal::class, 'id_personal', 'id');
    }

}
