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
    return view('welcome');
});

Auth::routes();

Route::resource('/tallers', App\Http\Controllers\TallerController::class);
Route::get('/alumnos', [App\Http\Controllers\mostrarTalleresController::class, 'index'])->name('alumnos');
Route::get('/registro', [App\Http\Controllers\RegistroController::class, 'index'])->name('registro');
Route::post('/guardar', [App\Http\Controllers\RegistroController::class, 'guardar'])->name('guardar');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
