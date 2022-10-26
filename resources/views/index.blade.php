@extends('layouts.app')
@section('title','Difregister')
@section('content')
    <div class="col-sm">
        <div class="card text-center" style="width: 18rem; margin-top: 70px;">
        <button type="button" onclick="window.location='{{ route("users.mostraruser") }}'">Beneficiarios</button>
        <button type="button" onclick="window.location='{{ route("RegUser.index") }}'">Usuarios</button>
        </div>
    </div>