<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Tabla empleado
    </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead> 
                    <tr>
                        <th>Integrante</th>
                        <th>Proceso</th>
                        <th>Tiempo contratado</th>
                        <th>Tiempo programado</th>
                    </tr>
                </thead>    
                <tbody style = "border: 1px solid "border: 1px solid black;">           
                    @foreach($empleados as $empleado)
                    <tr>
                        <td>{{$empleado->nombre}}</td>
                        <td>{{$empleado->proceso->nombre_proceso}}</td>
                        <td>{{$empleado->Tiempo_contratado}}</td>
                        <td>{{$empleado->Tiempo_contratado}}</td>
                        @endforeach
                </tbody>
                  
                </table>
        </div>        
</div>
    