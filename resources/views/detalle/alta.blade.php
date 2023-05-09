@extends('base')

@section('contenido')
<div class="text-center">
    <h2>Registro de detalles</h2>
    <p class="lead">Completa los datos solicitados</p>
</div>
<div class="row justify-content-center my-5">
    <div class="col-lg-6">
        <form action={{asset('/detalle')}} method="POST">
            @csrf
            @include('detalle.formulario')
        </form>
    </div>
</div>
@endsection