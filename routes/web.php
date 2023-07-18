<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layouts.plantilla');
});

/* IGNORAR LA SIGUIENTE RUTA  */
Route::get('/ejemplo', function () {
    return view('ejemplo.ejemplo');
});

/* INICIO RUTAS MANTENIMIENTO */

/* FIN RUTAS MANTENIMIENTO */



/* INICIO RUTAS CONTABILIDAD */

/* FIN RUTAS CONTABILIDAD */



/* INICIO RUTAS RECURSOS HUMANOS */

/* FIN RUTAS RECURSOS HUMANOS */



/* INICIO RUTAS ENCOMIENDA */

/* FIN RUTAS ENCOMIENDA */



/* RUTAS PARA LOGIN */
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/* RUTAS PARA USUARIOS Y ROLES */
Route::group(['middleware' => ['auth']], function(){
    Route::resource('roles',RolController::class);
    Route::resource('usuarios',UsuarioController::class);


}); 
