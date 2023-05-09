@extends('base')
@section('contenido')
{{-- Categorias --}}

<a href={{url('/categoria/create')}}>
    <button type="button" class="btn btn-dark">Categoria</button>
</a><br><br>

<table class="table table-danger table-striped table-hover table-bordered">
    <thead>
        <tr>
            <th scope="col">Nombre</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($categorias as $categoria)
    <tr>
        <td>{{$categoria->nombre}}</td>
        <td>
            <div class="row align-items-start">
                <div class="col">
                    <a href={{url('/categoria/'.$categoria->id.'/edit')}} class="btn btn-primary" role="button">Editar</a>
                </div>
                <div class="col">
                    <form action={{url('/categoria/'.$categoria->id)}} method="POST">
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