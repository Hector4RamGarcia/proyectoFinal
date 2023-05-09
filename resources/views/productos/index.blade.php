@extends('base')
@section('contenido')
{{-- Productos--}}

<a href={{asset('/producto/create')}}>
    <button type="button" class="btn btn-success">Registrar Productos</button>
</a><br><br>

<table class="table table-dark table-striped">
    <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th> 
            <th scope="col">Precio </th>
            <th scope="col">Categoria</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($productos as $producto)
            <tr>
                <td>{{$producto->nombre}}</td>
                <td>{{$producto->descripcion}}</td>
                <td>{{$producto->precio}}</td>
                <td>{{$producto->categorias->nombre}}</td>

                 <td>
            <div class="row align-items-start">
                <div class="col">
                    <a href={{asset('/producto/'.$producto->id.'/edit')}} class="btn btn-primary" role="button">Editar</a>
                </div>
                <div class="col">
                    <form action={{asset('/producto/'.$producto->id)}} method="POST">
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