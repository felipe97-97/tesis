<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Implemento extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $table = 'implementos';

    protected $filleable = ['item','marca','cantidad','id_proveedor'];


    //relaciones

    public function proveedor() {
    	return $this->belongsTo(Proveedor::class, 'id_proveedor', 'id');
    }
}
