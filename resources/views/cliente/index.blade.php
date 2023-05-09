@extends('base')
@section('contenido')
{{-- Clientes --}}

<a href={{url('/cliente/create')}}>
    <button type="button" class="btn btn-dark">Registrar Cliente</button>
</a><br><br>

<table class="table table-danger table-striped table-hover table-bordered">
    <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Telefono</th>
            <th scope="col">Direccion</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($clientes as $cliente)
    <tr>
        <td>{{$cliente->nombre}}</td>
        <td>{{$cliente->apellidoP.' '.$cliente->apellidoM}}</td>
        <td>{{$cliente->telefono}}</td>
        <td>{{$cliente->direccion}}</td>
        <td>
            <div class="row align-items-start">
                <div class="col">
                    <a href={{url('/cliente/'.$cliente->id.'/edit')}} class="btn btn-primary" role="button">Editar</a>
                </div>
                <div class="col">
                    <form action={{url('/cliente/'.$cliente->id)}} method="POST">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Estas Seguro?')" class="btn btn-danger" type="submit">
                            Borrar
                        </button>
                    </form>
                </div>

            </div>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>
@endsection