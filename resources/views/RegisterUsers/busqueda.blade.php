@include('layouts.app')
@section('title','Trainers')
@section('content')
     
@csrf
    <div class="row">
    @foreach ($difRegister as $difRegisters)
    <div class="col-sm">
    <div class="card" style="width: 18rem;"> 
  <div class="card-body">
    <img style="height: 100px; width: 100px;
            background-color: #EFEFEF; margin: 20px;
            " class="card-img-top rounded-circle mx-auto d-block" 
            src="images/{{$difRegisters->Avatar}}" alt="Imagen del Card...">

    <h5 class="card-title">{{$difRegisters->Nombre}}</h5>
    <h5 class="card-title">{{$difRegisters->Curp}}</h5>
    <h5 class="card-title">{{$difRegisters->Genero}}</h5>
    <h5 class="card-title">{{$difRegisters->NoDeHijos}}</h5>
    <h5 class="card-title">{{$difRegisters->Discap}}</h5>
    <h5 class="card-title">{{$difRegisters->Nomdiscap}}</h5>
    <h5 class="card-title">{{$difRegisters->Ing_Men}}</h5>
    <h5 class="card-title">{{$difRegisters->Nom_Apoyo}}</h5>
    <h5 class="card-title">{{$difRegisters->Status}}</h5>
 
    
</form>
  </div>
</div>
</div>
@endforeach
</div>