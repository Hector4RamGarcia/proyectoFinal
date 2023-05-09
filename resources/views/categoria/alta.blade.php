@extends('base')
@section('contenido')
<div class="text-center">
    <h2>Registro de Categorias</h2>
    <p class="lead">Categoria</p>
</div>
<div class="row justify-content-center my-5">
    <div class="col-lg-6">
        <form action={{asset('/categoria')}} method="POST">
            @csrf
            @include('categoria.formulario')
        </form>
    </div>
</div>
@endsection