<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('perfil', function () {
    return view('perfil');
});

Route::resource('peticions', App\http\controllers\PeticionController::class);
Route::resource('equipos', App\http\controllers\EquipoController::class);

Route::get('/temas', 'App\Http\Controllers\TemaController@index')->name('temas.index');
Route::get('/temas/{name}', 'App\Http\Controllers\TemaController@index1')->name('temas.index1');
//Route::get('/temas/{name}', 'App\Http\Controllers\TemaController@show')->name('temas.show');

Route::get('/temas/{tema}/{experimento}','App\Http\Controllers\TemaController@index2')->name('temas.index2');
//Route::get('/temas/{tema}/{experimento}/{material}','App\Http\Controllers\TemaController@show1')->name('temas.show1');

/*Route::get('temas', function () {
    return view('temas');
});*/

Route::get('experimentos', function () {
    return view('experimentos');
});

Route::get('solicitudes', function () {
    return view('solicitudes');
});


