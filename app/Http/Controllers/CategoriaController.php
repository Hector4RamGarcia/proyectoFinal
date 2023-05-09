<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias=Categoria::all(); 
        return view('categoria.index',['categorias'=>$categorias]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('categoria.alta'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $nuevoCategoria = new Categoria; 
       $nuevoCategoria->nombre=$request->input('nombre'); 
       
       $nuevoCategoria->save(); 
       return redirect('/categoria'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
     $categorias = Categoria::find($id); 
     return view('categoria.actualiza',['categorias'=>$categorias]); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       $categorias = Categoria::find($id); 
       $categorias->nombre=$request->input('nombre'); 
     
       $categorias->save(); 
       return redirect('/categoria'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categorias = Categoria::find($id); 
        $categorias->delete(); 
        return redirect('/categoria'); 
    }
}
