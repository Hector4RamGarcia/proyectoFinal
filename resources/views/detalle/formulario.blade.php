<div class="mb-3">
    <select class="form-select" aria-label="Ventas Realizadas" id="venta_id" name="venta_id">
      <option selected>Selecciona la Venta</option>
      @foreach ($ventas as $venta)
      <option value="{{$venta->id}}">{{$venta->id}}</option>  
      @endforeach
    </select>          
</div>
<div class="mb-3">
  <select class="form-select" aria-label="Productos vendidos" id="producto_id" name="producto_id">
    <option selected>Selecciona un producto</option>
    @foreach ($productos as $producto)
    <option value="{{$producto->id}}">{{$producto->nombre}}</option>  
    @endforeach
  </select>          
</div>

<div class="form-floating mb-3">
  <input type="number" id="cantidad" name="cantidad" class="form-control" placeholder="Cantidad"/>
  <label for="cantidad" class="form-label fuente">Cantidad </label>
</div>
<div class="form-floating mb-3">
    <input type="number" id="total" name="total" class="form-control" placeholder="Total"/>
    <label for="total" class="form-label fuente">Total </label>
  </div>

<div class="text-center">
  <a class="btn btn-danger" href="{{url('/detalle')}}" role="button">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</div>