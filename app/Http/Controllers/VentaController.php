<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta;
use App\Models\Cliente; 
use App\Models\empleados; 

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::all();
        $empleados = empleados::all(); 
        $ventas = Venta::all();  
        return view('venta.index', compact('ventas'));
    }
    public function create()
    {
        $clientes = Cliente::all();
        $empleados = empleados::all(); 
        return view('venta.alta', compact('clientes', 'empleados'));
    }
    
    public function store(Request $request)
    {
        $nuevaVenta=new Venta;
        $nuevaVenta->cliente=$request->cliente_id;
        $nuevaVenta->empleado=$request->empleado_id;
        $nuevaVenta->fecha=$request->input('fecha_id'); 
        $nuevaVenta->save(); 
        return redirect('/venta'); 
    }

    public function edit(string $id)
    {
        $nuevaVenta = Venta::findOrFail($id);
        $clientes = Cliente::all();
        $empleados = empleados::all();
    
        return view('venta.actualiza', compact('nuevaVenta', 'clientes', 'empleados'));
    }
    public function update(Request $request, string $id)
    {
        $nuevaVenta = Venta::findOrFail($id);
        $nuevaVenta->cliente=$request->cliente_id;
        $nuevaVenta->empleado=$request->empleado_id;
        $nuevaVenta->fecha=$request->input('fecha_id'); 
        $nuevaVenta->save(); 
        return redirect('/venta')->with('mensaje', 'La calificación ha sido actualizada');
    }
    public function destroy(string $id)
    {
        Venta::destroy($id);
        return redirect('/venta');
    }
}
