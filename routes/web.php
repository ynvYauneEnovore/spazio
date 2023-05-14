<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\DarkModeController;
use App\Http\Controllers\ColorSchemeController;

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
Route::get('color-scheme-switcher/{color_scheme}', [ColorSchemeController::class, 'switch'])->name('color-scheme-switcher');

Route::controller(AuthController::class)->middleware('loggedin')->group(function() {
    Route::get('login', 'loginView')->name('login.index');
    Route::post('login', 'login')->name('login.check');
    Route::get('register', 'registerView')->name('register.index');
    Route::post('register', 'register')->name('register.store');
});

Route::middleware('auth')->group(function() {
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::controller(PageController::class)->group(function() {


        Route::get('/', 'inicioAdmin')->name('inicioAdmin');

        Route::get('asistenciasAdmin', 'asistenciasAdmin')->name('asistenciasAdmin');

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
