<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiempo extends Model
{
    use HasFactory;
    protected $fillable = [
        'asunto',
        'hora_inicio',
        'hora_fin',
        'empleado_id'
    ];
}
