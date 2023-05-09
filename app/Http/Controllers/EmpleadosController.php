<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\empleados;


class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empleados = empleados::all();
        return view('empleados.index', ['empleados'=>$empleados]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $empleados= empleados::all();
        return view('empleados.alta',['empleados'=>$empleados]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nuevoEmpleado = new empleados;
        $nuevoEmpleado->nombre = $request->nombre;
        $nuevoEmpleado->apellidoP = $request->apellidoP;
        $nuevoEmpleado->apellidoM = $request->apellidoM;
        $nuevoEmpleado->telefono = $request->telefono;
        $nuevoEmpleado->save();
        return redirect('/empleados');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $empleados = empleados::findorfail($id);
        return view('empleados.actualiza', ['empleado'=>$empleados]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $empleadoUpd = empleados::findorfail($id);
        $empleadoUpd->nombre = $request->nombre;
        $empleadoUpd->apellidoP = $request->apellidoP;
        $empleadoUpd->apellidoM = $request->apellidoM;
        $empleadoUpd->telefono = $request->telefono;
        $empleadoUpd->save();
        return redirect('/empleados');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $empleado = empleados::findorfail($id);
        $empleado->delete();
        return redirect('/empleados')->with('success','Empleado Eliminado');
    }
}
