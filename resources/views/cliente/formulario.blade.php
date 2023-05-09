<div class="form-floating my-5">
    <input type="name" id="nombre" name="nombre" class="form-control" 
    @if(isset($cliente))
    value = {{$cliente->nombre}}
    @endif
    >
    <label for="nombre" class="form-label fuente">Nombre</label>
</div> 
<div class="form-floating my-5">
    <input type="name" id="apellidoP" name="apellidoP" class="form-control" 
    @if(isset($cliente))
    value = {{$cliente->apellidoP}}
    @endif
    >
    <label for="apellidoP" class="form-label fuente">Apellido Paterno</label>
</div> 

<div class="form-floating my-5">
    <input type="name" id="apellidoM" name="apellidoM" class="form-control" 
    @if(isset($cliente))
    value = {{$cliente->apellidoM}}
    @endif
    >
    <label for="apellidoM" class="form-label fuente">Apellido Materno</label>
</div> 

<div class="form-floating my-5">
    <input type="text" id="telefono" name="telefono" class="form-control" 
    @if(isset($cliente))
    value = {{$cliente->telefono}}
    @endif
    >
    <label for="telefono" class="form-label fuente">Telefono</label>
</div> 
<div class="form-floating my-5">
    <input type="text" id="direccion" name="direccion" class="form-control" 
    @if(isset($cliente))
    value = {{$cliente->direccion}}
    @endif
    >
    <label for="direccion" class="form-label fuente">Direccion</label>
</div> 

<div class="text-center">
<a class="btn btn-danger" href="{{url('/cliente')}}" role="button">Cancelar</a>
<button type="submit" class="btn btn-primary">Registrar Cliente</button>
</div>