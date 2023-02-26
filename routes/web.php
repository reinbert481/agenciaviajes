<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\VehiculoController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;     //meter esta instrucción después de instalar el paquete laravel/ui sino da error

//Spatie
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UsuarioController;

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

Auth::routes();     //use Illuminate/Support/Facades/Auth; soluciona el problema de "tipo Auth no definido"

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware'=>['auth']],function(){
    Route::resource('roles',RoleController::class);
    Route::resource('usuarios',UsuarioController::class);
    Route::resource('vehiculos',VehiculoController::class);
    Route::resource('reservas', ReservaController::class);
});
