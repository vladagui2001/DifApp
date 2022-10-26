@extends('layouts.app')
@section('title','Mostrar User Admin')
@section('content')
    @csrf
    <div class="row">
        @foreach ($RegUser as $RegUsers)
        <div class="col-sm">
        <div class="card text-center" style="width: 18rem; margin-top: 70px;">
            <img style="height: 100px; width: 100px;
            background-color: #EFEFEF; margin: 20px;
            " class="card-img-top rounded-circle mx-auto d-block" 
            src="images/{{$RegUsers->Avatar}}" alt="Imagen del Card...">
                <div class="card-body">
                <h5 class="card-title"><b>{{$RegUsers->id}}.- {{$RegUsers->Nombre}}</b></h5>
                <p class="card-text"><b>Username:</b> {{$RegUsers->Username}}</p>
                <p class="card-text"><b>Curp:</b> {{$RegUsers->Curp}}</p>
                <p class="card-text"><b>Fecha de Nacimiento:</b> {{$RegUsers->FechaNac}}</p>
                <p class="card-text"><b>Genero:</b> {{$RegUsers->Genero}}</p>
                <a href="/RegUser/{{$RegUsers->id}}/edit" class="btn btn-primary">
                Editar </a>
                <a href="/RegUser/delete/{{$RegUsers->id}}" class="btn btn-secondary">
                Eliminar </a>
            </div>
        </div>
        </div>
    @endforeach
    </div>
    <a href="/RegUser/create" class="btn btn-primary">
                Añadir Beneficiario </a>
