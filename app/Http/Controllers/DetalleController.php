<?php

namespace App\Http\Controllers;

use App\Models\productos;
use Illuminate\Http\Request;
use App\Models\Detalle;
use App\Models\Venta;


class DetalleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ventas = Venta::all();
        $productos = productos::all(); 
        $detalles = Detalle::all();  
        return view('detalle.index', compact('detalles'));
    }

    public function create()
    {
        $ventas = Venta::all();
        $productos = productos::all(); 
        return view('detalle.alta', compact('ventas', 'productos'));
    }
    
    public function store(Request $request)
    {
        $nuevosDetalles=new Detalle;
        $nuevosDetalles->venta=$request->venta_id;
        $nuevosDetalles->producto=$request->producto_id;
        $nuevosDetalles->cantidad=$request->input('cantidad'); 
        $nuevosDetalles->total=$request->input('total'); 
        $nuevosDetalles->save(); 
        return redirect('/detalle'); 
    }
    public function edit(string $id)
    {
        $nuevosDetalles = Detalle::findOrFail($id);
        $ventas = Venta::all();
        $productos = productos::all(); 
    
        return view('detalle.actualiza', compact('nuevosDetalles', 'ventas', 'productos'));
    }
    public function update(Request $request, string $id)
    {
        $nuevosDetalles = Detalle::findOrFail($id);
        $nuevosDetalles->venta=$request->venta_id;
        $nuevosDetalles->producto=$request->producto_id;
        $nuevosDetalles->cantidad=$request->input('cantidad'); 
        $nuevosDetalles->total=$request->input('total'); 
        $nuevosDetalles->save(); 
        return redirect('/detalle'); 
    }
    public function destroy(string $id)
    {
        Detalle::destroy($id);
        return redirect('/detalle');
    }
}
