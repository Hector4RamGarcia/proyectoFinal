@extends('base')

@section('contenido')
<a href="{{asset("/empleados/create")}}">
    <button type="button" class="btn btn-success">Registrar Empleado</button>
</a><br/><br/>

<table class="table table-danger table-striped" >
    <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Telefono</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($empleados as $empleado)
            <tr> 
                <td>{{$empleado->nombre}} </td>
                <td>{{$empleado->apellidoP." ".$empleado->apellidoM}}</td>
                <td>{{$empleado->telefono}}</td>
                <td>
                    <div class="row align-items-start">
                        <div class="col">
                            <a href={{asset('/empleados/'.$empleado->id.'/edit')}} class="btn btn-primary" >Cambios</a>
                        </div>
                        <div class="col">
                            <form action={{asset('/empleados/'.$empleado->id)}} method="POST">
                                @csrf
                                @method("DELETE")
                                <button onclick="return confirm('¿Estas seguro?')" class="btn btn-danger" type="submit">Borrar</button>
                            </form>
                            
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>
    
@endsection