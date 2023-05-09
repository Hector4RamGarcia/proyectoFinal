@extends('base')

@section('contenido')
<div class="text-center">
    <h2>Edición de productos</h2>
    <p class="lead">Completa los datos solicitados</p>
</div>
<div class="row justify-content-center my-5">
    <div class="col-lg-6">
      <form action="{{asset('/producto/'.$producto->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        @include('productos.formulario')
      </form>
    </div>
</div>
@endsection