<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\TransporteController;
use App\Http\Controllers\TarifaController;
use App\Http\Controllers\PromocionController;

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

Route::resource('ventas', VentaController::class)->names('ventas');
/* FIN RUTAS VENTAS */



/* INICIO RUTAS RECURSOS HUMANOS */

/* FIN RUTAS RECURSOS HUMANOS */



/* INICIO RUTAS ENCOMIENDA */
Route::get('/transportes', [TransporteController::class, 'index'])->name('transportes.index');
Route::get('/transportes/create', [TransporteController::class, 'create'])->name('transportes.create');
Route::post('/transportes', [TransporteController::class, 'store'])->name('transportes.store');
Route::get('/transportes/{transporte}/edit', [TransporteController::class, 'edit'])->name('transportes.edit');
Route::put('/transportes/{transporte}/update', [TransporteController::class, 'update'])->name('transportes.update');
Route::delete('/transportes/{transporte}/delete', [TransporteController::class, 'delete'])->name('transportes.delete');

Route::get('/tarifas', [TarifaController::class, 'index'])->name('tarifas.index');
Route::get('/tarifas/create', [TarifaController::class, 'create'])->name('tarifas.create');
Route::post('/tarifas', [TarifaController::class, 'store'])->name('tarifas.store');
Route::get('/tarifas/{tarifa}/edit', [TarifaController::class, 'edit'])->name('tarifas.edit');
Route::put('/tarifas/{tarifa}/update', [TarifaController::class, 'update'])->name('tarifas.update');
Route::delete('/tarifas/{tarifa}/delete', [TarifaController::class, 'delete'])->name('tarifas.delete');

Route::get('/promociones', [PromocionController::class, 'index'])->name('promociones.index');
Route::get('/promociones/create', [PromocionController::class, 'create'])->name('promociones.create');
Route::post('/promociones', [PromocionController::class, 'store'])->name('promociones.store');
Route::get('/promociones/{promocion}/edit', [PromocionController::class, 'edit'])->name('promociones.edit');
Route::put('/promociones/{promocion}/update', [PromocionController::class, 'update'])->name('promociones.update');
Route::delete('/promociones/{promocion}/delete', [PromocionController::class, 'delete'])->name('promociones.delete');
/* FIN RUTAS ENCOMIENDA */



/* RUTAS PARA LOGIN */
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/* RUTAS PARA USUARIOS Y ROLES */
Route::group(['middleware' => ['auth']], function(){
    Route::resource('roles',RolController::class);
    Route::resource('usuarios',UsuarioController::class);


}); 


