@extends('base')
@section('contenido')
{{-- Detalles--}}

<a href={{asset('/detalle/create')}}>
    <button type="button" class="btn btn-success">Registrar Detalles de la venta</button>
</a><br><br>

<table class="table table-dark table-striped">
    <thead>
        <tr>
            <th scope="col">Venta</th>
            <th scope="col">Producto</th>
            <th scope="col">Cantidad</th>
            <th scope="col">Total</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($detalles as $detalle)
            <tr>
                <td>{{$detalle->venta}}</td>
                <td>{{$detalle->productos->nombre}}</td>
                <td>{{$detalle->cantidad}}</td>
                <td>{{$detalle->total}}</td>

                 <td>
            <div class="row align-items-start">
                <div class="col">
                    <a href={{asset('/detalle/'.$detalle->id.'/edit')}} class="btn btn-primary" role="button">Editar</a>
                </div>
                <div class="col">
                    <form action={{asset('/detalle/'.$detalle->id)}} method="POST">
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