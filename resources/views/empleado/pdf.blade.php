<?php
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ReportePdf implements FromView
{
    public function view(): View
    {
        $empleados = Empleado::all();
        return view('pdf', compact('empleados'));
    }
}