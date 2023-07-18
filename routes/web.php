<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TransporteController;

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
Route::get('/transportes', [TransporteController::class, 'index'])->name('transportes.index');
Route::get('/transportes/create', [TransporteController::class, 'create'])->name('transportes.create');
Route::post('/transportes', [TransporteController::class, 'store'])->name('transportes.store');
Route::get('/transportes/{transporte}/edit', [TransporteController::class, 'edit'])->name('transportes.edit');
Route::put('/transportes/{transporte}/update', [TransporteController::class, 'update'])->name('transportes.update');
Route::delete('/transportes/{transporte}/delete', [TransporteController::class, 'delete'])->name('transportes.delete');
/* FIN RUTAS ENCOMIENDA */


