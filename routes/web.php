<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::resource("Users","DifUserController");
Route::resource("RegUser","DifUserAdminController");
Route::resource("difEncuesta","DifEncController");

//Rutas de User
Route::get("Users/create","DifUserController@create");
Route::get('Users/delete/{id}','DifUserController@destroy');

//Rutas de RegUser
Route::get("RegUser/create","DifUserAdminController@create");
Route::get('RegUser/delete/{id}','DifUserAdminController@destroy');

//Rutas de EncuestasUser
Route::get("difEncuesta/create","DifEncController@create");

//Añadido el 06-11-22
Route::get('mostraruser', array('uses' =>'DifUserController@mostrar', 'as' => 'mostraruser'));
Route::get('Users/create', array('uses' =>'DifUserController@create', 'as' => 'users.create'));
Route::get('RegUsmostrar', array('uses' =>'DifUserAdminController@mostrar', 'as' => 'mostrarReguser'));
Route::get('/', array('uses' =>'DifUserController@index', 'as' => '/'));
Route::get('difEncuesta/create', array('uses' =>'DifEncController@create', 'as' => 'EncuestaDif'));
Auth::routes();












