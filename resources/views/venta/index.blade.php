@extends('base')
@section('contenido')
{{-- Ventas--}}

<a href={{asset('/venta/create')}}>
    <button type="button" class="btn btn-success">Registrar Ventas</button>
</a><br><br>

<table class="table table-dark table-striped">
    <thead>
        <tr>
            <th scope="col">Cliente</th>
            <th scope="col">Empleado</th> 
            <th scope="col">Fecha</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($ventas as $venta)
            <tr>
                <td>{{$venta->clientes->nombre." ".$venta->clientes->apellidoP." ".$venta->clientes->apellidoM}}</td>
                <td>{{$venta->empleados->nombre." ".$venta->empleados->apellidoP." ".$venta->empleados->apellidoM}}</td>
                <td>{{$venta->fecha}}</td>
                 <td>
            <div class="row align-items-start">
                <div class="col">
                    <a href={{asset('/venta/'.$venta->id.'/edit')}} class="btn btn-primary" role="button">Editar</a>
                </div>
                <div class="col">
                    <form action={{asset('/venta/'.$venta->id)}} method="POST">
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