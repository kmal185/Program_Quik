<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre','cargo','tiempo_contratado','id_proceso'
     ];
     public function proceso(){
        return $this->belongsTo('App\Models\Proceso','id_proceso');
    }
}
