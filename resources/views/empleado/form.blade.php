<h1>{{ $modo }} colaborador</h1>

@if(count($errors)>0)
   
    <div class="alert alert-danger" role="alert">
<ul>
        @foreach ( $errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
 
</ul>
    </div>
   
@endif    
    <div class="form-group">
        <label for="id_proceso">Proceso</label><br>
        <input type="text"class="form-control" name="id_proceso" value="{{isset($empleado->id_proceso)?$empleado->id_proceso:old("id_proceso")}}"id="id_proceso">
        <br>
    </div>   
    
    <div class="form-group">
        <label for="nombre">Nombres</label><br>
        <input type="text"class="form-control"name="nombre" value="{{isset($empleado->nombre)?$empleado->nombre:old('nombre')}}"  id="nombre">
        <br>
    </div>

    <div class="form-group">
        <label for="Cargo">Cargo</label><br>
        <input type="text"class="form-control" name="Cargo" value="{{isset($empleado->Cargo)?$empleado->Cargo:old("Cargo")}}"id="Cargo">
        <br>
    </div>

    <div class="form-group">
        <label for="Tiempo_contratado">Tiempo_contratado</label><br>
        <input type="text"class="form-control" name="Tiempo_contratado" value="{{isset($empleado->Tiempo_contratado)?$empleado->Cargo:old("Tiempo_contratado")}}"id="Tiempo_contratado">
        <br>
    </div>
        <br>
        <input type="submit" class="btn btn-success" Value="{{ $modo }} empleado">

        <a class="btn btn-primary"  href="{{route('dashboard')}}">Regresar </a>
        <br>    