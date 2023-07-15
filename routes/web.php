<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\VentaController;
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


/* INICIO RUTAS VENTAS*/
Route::resource('clientes', ClienteController::class)->names('cliente');
/* FIN RUTAS VENTAS */



/* INICIO RUTAS RECURSOS HUMANOS */

/* FIN RUTAS RECURSOS HUMANOS */



/* INICIO RUTAS ENCOMIENDA */

/* FIN RUTAS ENCOMIENDA */


