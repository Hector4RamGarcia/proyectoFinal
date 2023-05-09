<div class="mb-3">
    <select class="form-select" aria-label="Clientes" id="cliente_id" name="cliente_id">
        <option selected>Selecciona un cliente</option>
        @foreach ($clientes as $cliente)
            <option value="{{$cliente->id}}">{{$cliente->nombre}}</option>  
        @endforeach
    </select>          
</div>
<div class="mb-3">
    <select class="form-select" aria-label="Empleados" id="empleado_id" name="empleado_id">
        <option selected>Selecciona un empleado</option>
        @foreach ($empleados as $empleado)
            <option value="{{$empleado->id}}">{{$empleado->nombre}}</option>  
        @endforeach
    </select>          
</div>

<div class="form-floating mb-3">
    <input type="date" id="fecha_id" name="fecha_id" class="form-control" placeholder="Fecha:"/>
    <label for="fecha" class="form-label fuente">Fecha: </label>
</div>

<div class="text-center">
    <a class="btn btn-danger" href="{{url('/venta')}}" role="button">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar</button>
</div>