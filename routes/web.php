<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\InicioController;

// CONTROLADORES DE VENTA
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\GraficoController;


/* CONTROLADORES DE MANTENIMIENTO */
use App\Http\Controllers\HerramientaController;
use App\Http\Controllers\TallerController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\RecursoController;
use App\Http\Controllers\PrioridadController;


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

/* Route::get('/', function () {
    return view('layouts.plantilla');
}); */

Route::get('/', function () {
    return view('auth.login');
  });


/* IGNORAR LA SIGUIENTE RUTA  */
Route::get('/ejemplo', function () {
    return view('ejemplo.ejemplo');
});

/* INICIO RUTAS MANTENIMIENTO */

//RUTAS PARA HERRAMIENTA
        Route::resource('Herramienta', HerramientaController::class);

        Route::get('Cancelarh', function () {
            return redirect()->route('Herramienta.index')->with('datos','Acción Cancelada ..!');
        })->name('cancelarh');
        Route::get('herramienta/{id}/eliminar',[HerramientaController::class,'destroy'])->name('Herramienta.destroy');

        //RUTAS PARA TALLER
        Route::resource('Taller', TallerController::class);

        Route::get('Cancelart', function () {
            return redirect()->route('Taller.index')->with('datos','Acción Cancelada ..!');
        })->name('cancelart');
        Route::get('taller/{id}/eliminar',[TallerController::class,'destroy'])->name('Taller.destroy');

        //RUTAS PARA PROVEEDOR
        Route::resource('Proveedor', ProveedorController::class);

        Route::get('Cancelarpr', function () {
            return redirect()->route('Proveedor.index')->with('datos','Acción Cancelada ..!');
        })->name('cancelarpr');
        Route::get('proveedor/{id}/eliminar',[ProveedorController::class,'destroy'])->name('Proveedor.destroy');

        //RUTAS PARA RECURSO
        Route::resource('Recurso', RecursoController::class);

        Route::get('Cancelarr', function () {
            return redirect()->route('Recurso.index')->with('datos','Acción Cancelada ..!');
        })->name('cancelarr');
        Route::get('recurso/{id}/eliminar',[RecursoController::class,'destroy'])->name('Recurso.destroy');

        //RUTAS PARA PRIORIDAD
        Route::resource('Prioridad', PrioridadController::class);

        Route::get('Cancelarpri', function () {
            return redirect()->route('Prioridad.index')->with('datos','Acción Cancelada ..!');
        })->name('cancelarpri');
        Route::get('prioridad/{id}/eliminar',[PrioridadController::class,'destroy'])->name('Prioridad.destroy');

/* FIN RUTAS MANTENIMIENTO */



/* INICIO RUTAS CONTABILIDAD */

/* FIN RUTAS CONTABILIDAD */


/* INICIO RUTAS VENTAS*/
Route::resource('clientes', ClienteController::class)->names('cliente');

Route::resource('ventas', VentaController::class)->names('ventas');

Route::get('graficos', [GraficoController::class, 'index'])->name('graficos.index');
/* FIN RUTAS VENTAS */



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
