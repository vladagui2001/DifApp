@include('layouts.app')
@section('title','Difregister')
@section('content')
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
<form method="POST" enctype="multipart/form-data">
    @csrf
    <div class="col-sm" style="width: 18rem; margin-top: 200px;">
        <img src='recursos/Solicitudboton.png' class='btn' onclick="window.location='{{ route("users.create") }}'">
        <img src='recursos/Estatusboton.png' class='btn' onclick="window.location='{{ route("mostraruser") }}'">
    </div>
</form>


    