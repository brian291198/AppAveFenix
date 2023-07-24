<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\VentaController;

/* CONTROLADORES DE MANTENIMIENTO */
use App\Http\Controllers\HerramientaController;
use App\Http\Controllers\TallerController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\RecursoController;
use App\Http\Controllers\PrioridadController;
use App\Http\Controllers\BusController;

/* CONTROLADORES DE RECURSOS HUMANOS */
use App\Http\Controllers\PersonalController;

/* CONTROLADORES DE ENCOMIENDAS */
use App\Http\Controllers\AgenciaController;
use App\Http\Controllers\TarifaController;
use App\Http\Controllers\ComprobanteController;
use App\Http\Controllers\TransporteController;
use App\Http\Controllers\EnvioController;
use App\Http\Controllers\PromocionController;
use App\Http\Controllers\PaqueteController;
use App\Http\Controllers\RutaController;
use App\Http\Controllers\ReclamoController;


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

        //RUTAS PARA BUS
        Route::resource('Bus', BusController::class);

        Route::get('Cancelarb', function () {
            return redirect()->route('Bus.index')->with('datos','Acción Cancelada ..!');
        })->name('cancelarb');
        Route::get('bus/{id}/eliminar',[BusController::class,'destroy'])->name('Bus.destroy');

/* FIN RUTAS MANTENIMIENTO */



/* INICIO RUTAS CONTABILIDAD */

/* FIN RUTAS CONTABILIDAD */


/* INICIO RUTAS VENTAS*/
Route::resource('clientes', ClienteController::class)->names('cliente');

Route::resource('ventas', VentaController::class)->names('ventas');
/* FIN RUTAS VENTAS */



/* INICIO RUTAS RECURSOS HUMANOS */
//RUTAS PARA PERSONAL
        Route::resource('Personal', PersonalController::class);

        Route::get('Cancelarp', function () {
            return redirect()->route('Personal.index')->with('datos','Acción Cancelada ..!');
        })->name('cancelarp');
        Route::get('personal/{id}/eliminar',[PersonalController::class,'destroy'])->name('Personal.destroy');



/* FIN RUTAS RECURSOS HUMANOS */



/* INICIO RUTAS ENCOMIENDA */
Route::resource('agencias', AgenciaController::class)->names('agencias');
Route::resource('comprobantes', ComprobanteController::class)->names('comprobantes');
Route::resource('envios', EnvioController::class)->names('envios');
Route::resource('paquetes', PaqueteController::class)->names('paquetes');
Route::resource('promociones', PromocionController::class)->names('promociones');
Route::resource('reclamos', ReclamoController::class)->names('reclamos');
Route::resource('rutas', RutaController::class)->names('rutas');
Route::resource('tarifas', TarifaController::class)->names('tarifas');
Route::resource('transportes', TransporteController::class)->names('transportes');
/* FIN RUTAS ENCOMIENDA */



/* RUTAS PARA LOGIN */
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/* RUTAS PARA USUARIOS Y ROLES */
Route::group(['middleware' => ['auth']], function(){
    Route::resource('roles',RolController::class);
    Route::resource('usuarios',UsuarioController::class);


}); 
