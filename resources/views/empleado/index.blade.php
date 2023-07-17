@extends('layouts.template_usuarios')
@section('content')
@stack('modals')
    <div class="card mb-4">
        <div class="card-header">
            <a href="{{route('empleado.create')}}"  data-bs-toggle="modal" data-bs-target="#registroModal" class="btn btn-primary">Registrar nuevo colaborador</a>
        </div>
    </div>    
    <div class="modal fade" id="registroModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Registrar nuevo colaborador</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Aquí puedes agregar el formulario de registro para el nuevo colaborador -->
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
                                </div>
                                <div class="modal-footer">
                                    <input type="submit" class="btn btn-outline-success" Value="crear">
                                    <a class="btn btn-outline-secondary"  href="{{route('empleado.index')}}">Regresar </a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
    
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    Tabla empleado
                </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead style = "border: 1px solid "border: 1px solid black;"> 
                                <tr>
                                    <th>Nombres</th>
                                    <th>Cargo</th>
                                    <th>Proceso</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>    
                            <tbody style = "border: 1px solid "border: 1px solid black;">           
                                @foreach($empleados as $empleado)
                                <tr>
                                    <td>{{$empleado->nombre}}</td>
                                    <td>{{$empleado->cargo}}</td>
                                    <td>{{$empleado->proceso->nombre_proceso}}</td>
                                    <td>
                                
                                        <a href="{{ url('/empleado/'.$empleado->id.'/edit')}}" >
                                            Editar 
                                        </a> 
                                        <i class="fa fa-pencil" aria-hidden="true"></i><br>
                                        <form action="{{url('/empleado/'.$empleado->id)}}" method="post">
                                            @csrf
                                            {{ method_field('DELETE')}}
                                            <input type="submit" onclick="return confirm('¿Quieres borrar los datos del colaborador?')" Value="Borrar" >
                                            <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                                            </form>
                                            @endforeach
                                </tbody>
                               
                            </table>

                    </div>        
            </div>
    
@endsection

