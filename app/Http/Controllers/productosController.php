<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Models\productos;

class productosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = productos::all();
        $categorias = Categoria::all(); 
        return view('productos.index', compact('productos'));
    }

    public function create()
    {
        $categorias=Categoria::all();
        return view('productos.alta',['categorias'=>$categorias]);
    }

    public function store(Request $request)
    {
        $nuevoProducto=new productos;
        $nuevoProducto->nombre=$request->nombre;
        $nuevoProducto->descripcion=$request->descripcion;
        $nuevoProducto->precio=$request->precio;
        $nuevoProducto->categoria=$request->categoria_id;
        $nuevoProducto->save();
        return redirect('/producto');
    }
    
    public function edit(string $id)
    {
        $productos=productos::findorfail($id);
        $categorias=Categoria::all();
        return view('productos.actualiza',['producto'=>$productos, 'categorias'=>$categorias]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $productos=productos::findorfail($id);
        $productos->nombre=$request->nombre;
        $productos->descripcion=$request->descripcion;
        $productos->precio=$request->precio;
        $productos->categoria=$request->categoria_id;
        $productos->save();
        return redirect('/producto');
    }

    public function destroy(string $id){
        productos::destroy($id); 
        return redirect('/producto'); 
    }
}
