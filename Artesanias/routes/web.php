<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'admin','as'=>'admin.'], function(){
    Route::get('/', function () {
        
        return view('admin.index');
    });
    Route::get('/usuarios', function () {
        return view('admin.layouts.users');
    });
   // Route::get('/productos', [App\Http\Controllers\Admin\ProductosController::class,'index']);

    Route::get('/productos', 'Admin\ProductosController@index');
    Route::post('/productos/edit', 'Admin\ProductosController@edit');
    Route::resource('productos', 'Admin\ProductosController');

});


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

Route::get('/practica', function(){
    return view('prac');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
