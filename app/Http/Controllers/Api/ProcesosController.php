<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Proceso;
class ProcesosController extends Controller
{
    //
    public function index(){
        try {
            $proceso = Proceso::all();
            return response()->json([
                'procesos' => $proceso
            ],200);
        } catch (\Throwable $th) {
            return response()->json([
                'errors'=> $th
            ],404);
        }
    }
}
