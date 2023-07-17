<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ExcelController extends Controller
{
    public function import(Request $request)
    {
        // Validar que el archivo es un archivo Excel
        $validator = Validator::make($request->all(), [
            'file' => 'required|mimes:csv,txt'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        // Cargar el archivo Excel
        $file = $request->file('file');
        $rows = array_map('str_getcsv', file($file));

        // Procesar los datos del archivo CSV
        foreach ($rows as $row) {
            // Validar los datos del archivo CSV
            $validator = Validator::make($row, [
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email'
            ]);

            if ($validator->fails()) {
                continue;
            }

            // Guardar los datos del archivo CSV en la base de datos
            User::create([
                'name' => $row[0],
                'email' => $row[1]
            ]);
        }

        return redirect()->back()->with('success', 'El archivo CSV se ha importado correctamente.');
    }
}