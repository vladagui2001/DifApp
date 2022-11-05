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
    return view('mostraruser',compact('User'));
});
Route::resource("Users","DifUserController");
Route::resource("RegUser","DifUserAdminController");

Route::get("Users/create","DifUserController@create");
Route::get("RegUser/create","DifUserAdminController@create");

Route::get('Users/mostraruser', array('uses' =>'DifUserController@index', 'as' => 'users.mostraruser'));

Route::get('Users/delete/{id}','DifUserController@destroy');
Auth::routes();

Route::get('RegUser/delete/{id}','DifUserAdminController@destroy');
Auth::routes();


//Añadido el 29-09-22









