<?php

namespace App\Imports;

use App\Models\Empleado;
use Maatwebsite\Excel\Concerns\ToModel;

class Empleados2Import implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Empleado([
            //
            'documento' => $row[0],
            'nombre' => $row[1], 
            'cargo' => $row[2],
            'Tiempo_programado' => $row[3],
        ]);
    }
}
