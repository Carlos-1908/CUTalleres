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
Route::post('/datosalumno', [App\Http\Controllers\DatosAlumnoController::class, 'index'])->name('datosalumno');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
