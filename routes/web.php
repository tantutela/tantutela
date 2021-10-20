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

use App\Http\Controllers\AlquilerController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\HabitacionController;
use App\Http\Controllers\NacionalidadController;
use App\Http\Controllers\TipoHabitacionController;
use App\Http\Controllers\RegistradorController;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('/alquiler', AlquilerController::class);
Route::resource('/cliente', ClienteController::class);
Route::resource('/estado', EstadoController::class);
Route::resource('/habitacion', HabitacionController::class);
Route::resource('/nacionalidad', NacionalidadController::class);
Route::resource('/tipohabitacion', TipoHabitacionController::class);
Route::resource('/registrador', RegistradorController::class);