@extends('layouts.app')
@section('title', 'Register User Create')
@section('content')

<!-- <script src="C:/xampp/htdocs/ProjectoRealDifApp/DifApp/resources/js/create.js"></script> -->
<form class="form-group" method="POST" action="/RegUser" enctype="multipart/form-data">
    @csrf
        <div clas='form-group'>
            <label for=''>Nombre:</label>
            <input type='text'name="Nombre" class='form-control'> <br>

            <label for=''>Nombre de Usuario:</label>
            <input type='text'name="Username" class='form-control'> <br>
            
            <label for=''>CURP:</label>
            <input type='text'name="Curp" class='form-control'> <br>
            
            <label for=''>Fecha de Nacimiento:</label>
            <input type='date' name="FechaNac" class='form-control'> <br>

            <div class="Genero">
                <label for=''>Género:</label> <br>
                <label><input name="Genero" type="radio" value="Hombre">Hombre</label>
                <label><input name="Genero" type="radio" value="Mujer">Mujer</label>
                <label><input name="Genero" type="radio" value="Otro">Otro</label>
            </div><br>

            <label for="">Avatar:</label>
            <input type="file" name="Avatar">

        </div>
        <button type='submit'class='btn btn-primary'>
        Guardar</button>
</form>
@endsection

