<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes=Cliente::all(); 
        return view('cliente.index',['clientes'=>$clientes]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      return view('cliente.alta'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $nuevoCliente = new Cliente; 
       $nuevoCliente->nombre=$request->input('nombre'); 
       $nuevoCliente->apellidoP=$request->input('apellidoP'); 
       $nuevoCliente->apellidoM=$request->input('apellidoM'); 
       $nuevoCliente->telefono=$request->input('telefono'); 
       $nuevoCliente->direccion=$request->input('direccion'); 
       $nuevoCliente->save(); 
       return redirect('/cliente'); 
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
     $clientes = Cliente::find($id); 
     return view('cliente.actualiza',['clientes'=>$clientes]); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       $clientes = Cliente::find($id); 
       $clientes->nombre=$request->input('nombre'); 
       $clientes->apellidoP=$request->input('apellidoP'); 
       $clientes->apellidoM=$request->input('apellidoM'); 
       $clientes->telefono=$request->input('telefono'); 
       $clientes->direccion=$request->input('direccion'); 
       $clientes->save(); 
       return redirect('/cliente'); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $clientes = Cliente::find($id); 
        $clientes->delete(); 
        return redirect('/cliente'); 
    }
}
