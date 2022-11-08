@extends('layouts.app')
@section('title', 'Encuesta Create')
@section('content')

<!-- <script src="C:/xampp/htdocs/ProjectoRealDifApp/DifApp/resources/js/create.js"></script> -->
<form class="form-group" method="POST" action="/Users" enctype="multipart/form-data">
    @csrf
        <div clas='form-group'>
            <label for=''>Nombre del encuestador</label>
            <input type='text'name="Nombre" class='form-control' maxlength="100"> <br>

            <label for=''><b>Instrucciones: </b>Enumere del 1 al 10 el nivel de satisfacción en cada uno de los puntos, siendo 1 poco satisfecho y 10 muy satisfecho. </label>
            <p></p>
            <label for=''>1.- Se han cumplido las expectativas del sistema</label>
            <div class="Pregunta1">
                <label><input name="Pregunta1" type="radio" value="1">1</label>
                <label><input name="Pregunta1" type="radio" value="2">2</label>
                <label><input name="Pregunta1" type="radio" value="3">3</label>
                <label><input name="Pregunta1" type="radio" value="4">4</label>
                <label><input name="Pregunta1" type="radio" value="5">5</label>
                <label><input name="Pregunta1" type="radio" value="6">6</label>
                <label><input name="Pregunta1" type="radio" value="7">7</label>
                <label><input name="Pregunta1" type="radio" value="8">8</label>
                <label><input name="Pregunta1" type="radio" value="9">9</label>
                <label><input name="Pregunta1" type="radio" value="10">10</label>
            </div><br>

            <label for=''>2.- El sistema cuenta con todos los apartados necesarios para el registro</label>
            <div class="Pregunta2">
                <label><input name="Pregunta2" type="radio" value="1">1</label>
                <label><input name="Pregunta2" type="radio" value="2">2</label>
                <label><input name="Pregunta2" type="radio" value="3">3</label>
                <label><input name="Pregunta2" type="radio" value="4">4</label>
                <label><input name="Pregunta2" type="radio" value="5">5</label>
                <label><input name="Pregunta2" type="radio" value="6">6</label>
                <label><input name="Pregunta2" type="radio" value="7">7</label>
                <label><input name="Pregunta2" type="radio" value="8">8</label>
                <label><input name="Pregunta2" type="radio" value="9">9</label>
                <label><input name="Pregunta2" type="radio" value="10">10</label>
            </div><br>

            <label for=''>3.- El sistema es fácil de utilizar</label>
            <div class="Pregunta3">
                <label><input name="Pregunta3" type="radio" value="1">1</label>
                <label><input name="Pregunta3" type="radio" value="2">2</label>
                <label><input name="Pregunta3" type="radio" value="3">3</label>
                <label><input name="Pregunta3" type="radio" value="4">4</label>
                <label><input name="Pregunta3" type="radio" value="5">5</label>
                <label><input name="Pregunta3" type="radio" value="6">6</label>
                <label><input name="Pregunta3" type="radio" value="7">7</label>
                <label><input name="Pregunta3" type="radio" value="8">8</label>
                <label><input name="Pregunta3" type="radio" value="9">9</label>
                <label><input name="Pregunta3" type="radio" value="10">10</label>
            </div><br>

            <label for=''>4.- El sistema no presenta errores </label>
            <div class="Pregunta4">
                <label><input name="Pregunta4" type="radio" value="1">1</label>
                <label><input name="Pregunta4" type="radio" value="2">2</label>
                <label><input name="Pregunta4" type="radio" value="3">3</label>
                <label><input name="Pregunta4" type="radio" value="4">4</label>
                <label><input name="Pregunta4" type="radio" value="5">5</label>
                <label><input name="Pregunta4" type="radio" value="6">6</label>
                <label><input name="Pregunta4" type="radio" value="7">7</label>
                <label><input name="Pregunta4" type="radio" value="8">8</label>
                <label><input name="Pregunta4" type="radio" value="9">9</label>
                <label><input name="Pregunta4" type="radio" value="10">10</label>
            </div><br>

            <label for=''>5.- La creación de usuarios y beneficiarios es satisfactoria</label>
            <div class="Pregunta5">
                <label><input name="Pregunta5" type="radio" value="1">1</label>
                <label><input name="Pregunta5" type="radio" value="2">2</label>
                <label><input name="Pregunta5" type="radio" value="3">3</label>
                <label><input name="Pregunta5" type="radio" value="4">4</label>
                <label><input name="Pregunta5" type="radio" value="5">5</label>
                <label><input name="Pregunta5" type="radio" value="6">6</label>
                <label><input name="Pregunta5" type="radio" value="7">7</label>
                <label><input name="Pregunta5" type="radio" value="8">8</label>
                <label><input name="Pregunta5" type="radio" value="9">9</label>
                <label><input name="Pregunta5" type="radio" value="10">10</label>
            </div><br>

            <label for=''>6.- El sistema ha ayudado a optimizar los tiempos de registro y de búsqueda</label>
            <div class="Pregunta6">
                <label><input name="Pregunta6" type="radio" value="1">1</label>
                <label><input name="Pregunta6" type="radio" value="2">2</label>
                <label><input name="Pregunta6" type="radio" value="3">3</label>
                <label><input name="Pregunta6" type="radio" value="4">4</label>
                <label><input name="Pregunta6" type="radio" value="5">5</label>
                <label><input name="Pregunta6" type="radio" value="6">6</label>
                <label><input name="Pregunta6" type="radio" value="7">7</label>
                <label><input name="Pregunta6" type="radio" value="8">8</label>
                <label><input name="Pregunta6" type="radio" value="9">9</label>
                <label><input name="Pregunta6" type="radio" value="10">10</label>
            </div><br>

            <label for=''>7.- Cuál es la Probabilidad de recomendar esta aplicación a otro personal</label>
            <div class="Pregunta7">
                <label><input name="Pregunta7" type="radio" value="1">1</label>
                <label><input name="Pregunta7" type="radio" value="2">2</label>
                <label><input name="Pregunta7" type="radio" value="3">3</label>
                <label><input name="Pregunta7" type="radio" value="4">4</label>
                <label><input name="Pregunta7" type="radio" value="5">5</label>
                <label><input name="Pregunta7" type="radio" value="6">6</label>
                <label><input name="Pregunta7" type="radio" value="7">7</label>
                <label><input name="Pregunta7" type="radio" value="8">8</label>
                <label><input name="Pregunta7" type="radio" value="9">9</label>
                <label><input name="Pregunta7" type="radio" value="10">10</label>
            </div><br>

            <label for=''>8.- Satisfacción con el uso de la aplicación</label>
            <div class="Pregunta8">
                <label><input name="Pregunta8" type="radio" value="1">1</label>
                <label><input name="Pregunta8" type="radio" value="2">2</label>
                <label><input name="Pregunta8" type="radio" value="3">3</label>
                <label><input name="Pregunta8" type="radio" value="4">4</label>
                <label><input name="Pregunta8" type="radio" value="5">5</label>
                <label><input name="Pregunta8" type="radio" value="6">6</label>
                <label><input name="Pregunta8" type="radio" value="7">7</label>
                <label><input name="Pregunta8" type="radio" value="8">8</label>
                <label><input name="Pregunta8" type="radio" value="9">9</label>
                <label><input name="Pregunta8" type="radio" value="10">10</label>
            </div><br>

        </div>
        <button type='submit'class='btn btn-dif'>
        Guardar</button>
</form>
@endsection

