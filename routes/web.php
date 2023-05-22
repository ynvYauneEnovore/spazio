<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\DarkModeController;
use App\Http\Controllers\ColorSchemeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ClasesController;
use App\Http\Controllers\CasillerosController;

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

Route::get('dark-mode-switcher', [DarkModeController::class, 'switch'])->name('dark-mode-switcher');

Route::controller(AuthController::class)->middleware('loggedin')->group(function() {
    Route::get('login', 'loginView')->name('login.index');
    Route::post('login', 'login')->name('login.check');
});

Route::middleware('auth')->group(function() {
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::controller(PageController::class)->group(function() {

        //rutas de los crud
        Route::resource('products', ProductController::class);

        Route::resource('clientes', ClientesController::class)->names([
            'index' => 'clientes.index',
            'create' => 'clientes.create',
            'store' => 'clientes.store',
            'show' => 'clientes.show',
            'edit' => 'clientes.edit',
            'update' => 'clientes.update',
            'destroy' => 'clientes.destroy',
        ]);

        Route::resource('productos', ProductosController::class)->names([
            'index' => 'productos.index',
            'create' => 'productos.create',
            'store' => 'productos.store',
            'show' => 'productos.show',
            'edit' => 'productos.edit',
            'update' => 'productos.update',
            'destroy' => 'productos.destroy',
        ]);

        Route::resource('clases', ClasesController::class)->names([
            'index' => 'clases.index',
            'create' => 'clases.create',
            'store' => 'clases.store',
            'show' => 'clases.show',
            'edit' => 'clases.edit',
            'update' => 'clases.update',
            'destroy' => 'clases.destroy',
        ]);

        Route::resource('casilleros', CasillerosController::class)->names([
            'index' => 'casilleros.index',
            'create' => 'casilleros.create',
            'store' => 'casilleros.store',
            'show' => 'casilleros.show',
            'edit' => 'casilleros.edit',
            'update' => 'casilleros.update',
            'destroy' => 'casilleros.destroy',
        ]);



        Route::get('/', 'inicioAdmin')->name('inicioAdmin');

        Route::get('asistenciasAdmin', 'asistenciasAdmin')->name('asistenciasAdmin');
        Route::get('productosAdmin', 'productosAdmin')->name('productosAdmin');


        Route::get('verClientes', 'verClientes')->name('verClientes');
        Route::get('editarClientes', 'editarClientes')->name('editarClientes');
        Route::get('crearClientes', 'crearClientes')->name('crearClientes');

        Route::get('verEntrenadores', 'verEntrenadores')->name('verEntrenadores');
        Route::get('editarEntrenadores', 'editarEntrenadores')->name('editarEntrenadores');
        Route::get('crearEntrenadores', 'crearEntrenadores')->name('crearEntrenadores');

        Route::get('verClases', 'verClases')->name('verClases');
        Route::get('editarClases', 'editarClases')->name('editarClases');
        Route::get('crearClases', 'crearClases')->name('crearClases');

        Route::get('asignarCasilleros', 'asignarCasilleros')->name('asignarCasilleros');
        Route::get('liberarCasilleros', 'liberarCasilleros')->name('liberarCasilleros');
        Route::get('verCasilleros', 'verCasilleros')->name('verCasilleros');

        Route::get('crearProducto', 'crearProducto')->name('crearProducto');
        Route::get('verProducto', 'verProducto')->name('verProducto');
        Route::get('editarProducto', 'editarProducto')->name('editarProducto');

        Route::get('ingresarSauna', 'ingresarSauna')->name('ingresarSauna');
        Route::get('salirSauna', 'salirSauna')->name('salirSauna');
        Route::get('disponibilidadSauna', 'disponibilidadSauna')->name('disponibilidadSauna');

        Route::get('ventasReporte', 'ventasReporte')->name('ventasReporte');
        Route::get('asistenciasReporte', 'asistenciasReporte')->name('asistenciasReporte');
        Route::get('ingresosReporte', 'ingresosReporte')->name('ingresosReporte');

        Route::get('documentacionSoporte', 'documentacionSoporte')->name('documentacionSoporte');


    });
});


