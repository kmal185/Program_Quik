<?php
namespace App\Http\Controllers;
use App\Models\Empleado;
use App\Imports\TiempoImport;
use Illuminate\Http\Request;
use App\Exports\EmpleadosExport;
use Maatwebsite\Excel\Facades\Excel;


class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['empleados'] = Empleado::get();
        return view('empleado.index',$datos);
        }   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $empleado=Empleado::findOrFail($id);
        return view('empleado.edit', compact('empleado'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosEmpleado = request()->except(['_token' ,'_method']);
        Empleado::where('id','=', $id)->update($datosEmpleado);

        $empleado=Empleado::findOrFail($id);
        return view('empleado.edit', compact('empleado'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Empleado::destroy($id);
        return redirect('empleado');
    }

    public function pdf()
    {
        //
        $empleados= Empleado::all();
        return view('empleado.pdf', compact('empleados'));
    }

    public function exportAllEmpleados()
    {

        return Excel::download(new EmpleadosExport,'empleados.xlsx');
    }
    public function importar(Request $request)
    {
    $empleados = $request->empleados;
   
        // Validar el archivo xlsx
        $request->validate([
         'archivo' => 'required|mimes:xlsx'
        ]);
        Excel::import(new TiempoImport($empleados), request()->file('archivo'));
        // Redirigir de vuelta a la página anterior con un mensaje de éxito
        return redirect()->back()->with('success', 'Los datos del archivo han sido importados correctamente.');
    }};