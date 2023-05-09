<div class="form-floating mb-3">
    <input type="name" id="nombre" name="nombre" class="form-control" placeholder="Nombre del producto"
      @if(isset($producto))
        value={{$producto->nombre}}
      @endif
    />
    <label for="nombre" class="form-label fuente">Nombre del Producto:</label>
  </div>
  <div class="form-floating mb-3">
    <input type="text" id="descripcion" name="descripcion" class="form-control" placeholder="Descripcion"
      @if(isset($producto))
        value={{$producto->descripcion}}
      @endif
    />
    <label for="descripcion" class="form-label fuente">Descripcion:</label>
  </div>
  <div class="form-floating mb-3">
    <input type="number" id="precio" name="precio" class="form-control" placeholder="Precio"
      @if(isset($producto))
        value={{$producto->precio}}
      @endif
    />
    <label for="apMat" class="form-label fuente">Precio:</label>
  </div>
  <div class="mb-3">
    <select class="form-select" aria-label="Categorias" id="categoria_id" name="categoria_id">
      <option selected>Selecciona una categoria</option>
      @foreach ($categorias as $categoria)
      <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>  
      @endforeach
    </select>          
  </div>
  <div class="text-center">
    <a class="btn btn-danger" href="{{url('/producto')}}" role="button">Cancelar</a>
    <button type="submit" class="btn btn-primary">Guardar Producto</button>
  </div>
  