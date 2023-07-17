<?php

namespace App\Http\Controllers;

use App\Imports\TiempoImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    public function import(Request $request)
    {
            
        // Validar que el archivo es un archivo Excel
        /*$validator = Validator::make($request->all(), [
           // 'file' => 'required|mimes:csv,txt'
        ]);*/
         Excel::import(new TiempoImport, 'xlsx');

       /* if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }*/

        // Cargar el archivo Excel
       /* $file = $request->file('file');
        $rows = array_map('str_getcsv', file($file));

        // Procesar los datos del archivo CSV
        foreach ($rows as $row) {
            // Validar los datos del archivo CSV
            $validator = Validator::make($row, [
                'nombre' => 'required|string|max:255',
                'documento' => 'required|documento|unique:users,documento'
            ]);

            if ($validator->fails()) {
                continue;
            }

            // Guardar los datos del archivo CSV en la base de datos
            User::create([
                'nombre' => $row[0],
                'documento' => $row[1]
            ]);
        }

        return redirect()->back()->with('success', 'El archivo CSV se ha importado correctamente.');
        */
    }
}