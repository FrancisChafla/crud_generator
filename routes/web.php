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


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('usuarios', App\Http\Controllers\UsuarioController::class);
Route::resource('roles', App\Http\Controllers\RoleController::class);
Route::resource('usuarios-roles', App\Http\Controllers\UsuariosRoleController::class);


Route::post('usuarios/{id}/cambiar-estado', [App\Http\Controllers\UsuarioController::class, 'cambiarEstado'])->name('cambiar.estado');
Route::put('/roles/{id}/toggle', [App\Http\Controllers\RoleController::class, 'toggleStatus'])->name('roles.toggle');

Route::resource('empleados', App\Http\Controllers\EmpleadoController::class);
Route::put('/empleados/{id}/toggle', [App\Http\Controllers\EmpleadoController::class, 'toggle'])->name('empleados.toggle');

Route::resource('carreras', App\Http\Controllers\CarreraController::class);
Route::put('/carreras/{id}/toggle', [App\Http\Controllers\CarreraController::class, 'toggle'])->name('carreras.toggle');

Route::resource('periodos', App\Http\Controllers\PeriodoController::class);
Route::put('/periodos/{id}/toggle', [App\Http\Controllers\PeriodoController::class, 'toggle'])->name('periodos.toggle');
Route::resource('empleadoscarreras', App\Http\Controllers\EmpleadosCarreraController::class);
