<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoActividadController;
use GuzzleHttp\Client;
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

Route::get('/empleadoactividad', [EmpleadoActividadController::class, 'index'])->name('empleadoactividad.index');
Route::get('/empleadoactividad/create', [EmpleadoActividadController::class, 'create'])->name('empleadoactividad.create');
Route::post('/empleadoactividad', [EmpleadoActividadController::class, 'store'])->name('empleadoactividad.store');
Route::get('/empleadoactividad/{id}', [EmpleadoActividadController::class, 'show'])->name('empleadoactividad.show');
Route::get('/empleadoactividad/{id}/edit', [EmpleadoActividadController::class, 'edit'])->name('empleadoactividad.edit');
Route::put('/empleadoactividad/{id}', [EmpleadoActividadController::class, 'update'])->name('empleadoactividad.update');
Route::delete('/empleadoactividad/{id}', [EmpleadoActividadController::class, 'destroy'])->name('empleadoactividad.destroy');