@extends('base')

@section('contenido')
<div class="text-center">
    <h2>Registro de Ventas</h2>
    <p class="lead">Completa los datos solicitados</p>
</div>
<div class="row justify-content-center my-5">
    <div class="col-lg-6">
        <form action={{asset('/venta')}} method="POST">
            @csrf
            @include('venta.formulario')
        </form>
    </div>
</div>
@endsection