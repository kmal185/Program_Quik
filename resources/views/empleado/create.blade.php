<div class="card mb-4">
    <div class="card-header">
<form action="{{url('/empleado ')}}" method="post" enctype="multipart/form-data">
    @csrf
    
    @include('empleado.form',['modo'=>'Crear'])
    
    </form>
    </div>