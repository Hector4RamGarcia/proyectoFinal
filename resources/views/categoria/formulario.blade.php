<div class="form-floating my-5">
    <input type="name" id="nombre" name="nombre" class="form-control" 
    @if(isset($categoria))
    value = {{$categoria->nombre}}
    @endif
    >
    <label for="nombre" class="form-label fuente">Nombre</label>
</div> 
<div class="text-center">
    <a class="btn btn-danger" href="{{url('/categoria')}}" role="button">Cancelar</a>
    <button type="submit" class="btn btn-primary">Registrar Categoria</button>
</div>