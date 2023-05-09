@extends('base')

@section('contenido')
<div class="text-center">
    <h2>Edicion de Categorias</h2>
    <p class="lead">Completa los datos solicitados</p>
</div>
<div class="row justify-content-center my-5">
    <div class="col-lg-6">
        <form action="/categoria/{{$categorias->id}}"method = "POST">
            @csrf
            @method('PATCH')
        @include('categoria.formulario')
        </form>
    </div>
</div>
@endsection