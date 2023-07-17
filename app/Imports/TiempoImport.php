<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use App\Models\Tiempo;
use Maatwebsite\Excel\Concerns\ToModel;

class TiempoImport implements ToModel
{
    /**
    * @param Collection $collection
    */
    public function __construct($empleado){
        $this->empleado = $empleado;
    }
    public function model(array $row)
    {


        return new Tiempo([
            //
            'asunto' => $row[0],
            'hora_inicio' => substr($row[1], 0, 8), 
            'hora_fin' => substr($row[2], 0, 8),
            'empleado_id' => $this->empleado,
        ]);
    }
}
