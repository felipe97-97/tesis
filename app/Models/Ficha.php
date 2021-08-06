<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $table = 'fichas';

    protected $fillable = ['id_paciente'];


    //relaciones

    public function paciente() {
    	return $this->belongsTo(Paciente::class, 'id_paciente', 'id');
    }

    public function anamnesis() {
    	return $this->hasMany(Anamnesis::class, 'id_ficha');
    }

    public function anamnesis_odontologica() {
    	return $this->hasMany(AnamnesisOdontologica::class, 'id_ficha');
    }

    public function odontograma() {
    	return $this->hasMany(Odontograma::class, 'id_ficha');
    }

    public function evaluacion_clinica() {
    	return $this->hasMany(EvaluacionClinica::class, 'id_ficha');
    }

    public function radiografias() {
    	return $this->hasMany(Radiografia::class, 'id_ficha');
    }

    public function fotografias_clinicas() {
    	return $this->hasMany(FotografiasClinica::class, 'id_ficha');
    }
}
