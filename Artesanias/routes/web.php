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
Route::get('/contacto', function() {
    $contacto = "Hector Reyes";
    $valores = "10";
    $colorFondo = "#ccc";
    return view('contacto') 
    -> with ('nombre' , $contacto)
    -> with ('valor' , $valores)
    -> with ('fondo' , $colorFondo);
});
Route::get('/producto/{id}', function ($id) {
    return view('verproducto')
    -> with ('id' , $id);
});
