<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\GraficaController;
use App\Http\Controllers\UserController;
use App\Models\Empleado;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('chart', function () {
        return view('chart');
})->name('chart');
Route::get('tablas', function () { 
    $empleados = Empleado::all();
    return view('tablas',compact('empleados'));
})->name('tablas');
Route::get('import', function () {
    $employees = Empleado::all();
    return view('import',compact('employees'));
})->name('import');
Route::get('empleados/pdf',[App\Http\Controllers\EmpleadoController::class,'pdf'])->name('empleado.pdf');
Route::resource('empleado', EmpleadoController::class);
Route::post('/empleado/importar', [EmpleadoController::class, 'importar'])->name('empleados.importar');
Route::resource('/grafica',GraficaController::class);
Route::get('/empleados/export',[EmpleadoController::class, 'exportAllEmpleados'])->name('empleados.export');
Route::get('/users/export',[UserController::class, 'exportAllUsers'])->name('users.export');
Route::post('/empleados/all','EmpleadoController@all');
    
});

