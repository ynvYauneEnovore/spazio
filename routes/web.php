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


        Route::get('/', 'dashboardOverview1')->name('dashboard-overview-1');
        Route::get('dashboard-overview-2-page', 'dashboardOverview2')->name('dashboard-overview-2');
        Route::get('dashboard-overview-3-page', 'dashboardOverview3')->name('dashboard-overview-3');
        Route::get('serviciosClases', 'serviciosClases')->name('serviciosClases');
        Route::get('serviciosProductos', 'serviciosProductos')->name('serviciosProductos');
        Route::get('preguntaDocumentacion', 'preguntaDocumentacion')->name('preguntaDocumentacion');
        Route::get('preguntaFaq', 'preguntaFaq')->name('preguntaFaq');
        Route::get('preguntaContactanos', 'preguntaContactanos')->name('preguntaContactanos');
        Route::get('gestionBalance', 'gestionBalance')->name('gestionBalance');
        Route::get('gestionContabilidad', 'gestionContabilidad')->name('gestionContabilidad');
        Route::get('gestionFinanzas', 'gestionFinanzas')->name('gestionFinanzas');
        Route::get('gestionInformes', 'gestionInformes')->name('gestionInformes');

    });
});
