<?php

use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'redictto_http'], function () {

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'shider_imgs'])->name('/');

//Route::view('inicio','PaginaWeb/vistas/Home/home');
//MODULO INICIO
Route::get('/inicio', function(){
    return view('PaginaWeb/vistas/Home/home');
});

//MODULO HABITACIONES
//Route::get('/habitaciones', function(){
    //return view('PaginaWeb/vistas/Habitaciones/habitaciones');
//});
Route::get('/habitaciones', [App\Http\Controllers\HabitacionesController::class, 'present_habitacion'])->name('/habitaciones');

//MODULO GALERIA
//Route::get('/galeria', function(){
   // return view('PaginaWeb/vistas/Galeria/galeria');
//});
Route::get('/galeria', [App\Http\Controllers\GaleriaController::class, 'galeria'])->name('/galeria');

 //MODULO IZAMAL
//Route::get('/izamal', function(){
     //return view('PaginaWeb/vistas/Izamal/izamal');

Route::get('/izamal', [App\Http\Controllers\IzamalController::class, 'izamal'])->name('/izamal');


// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});
