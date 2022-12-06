<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\ComponentesController;
use App\Http\Controllers\ServicioController;

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
    return view('home');
});


Route::resource('/clientes', ClientesController::class)->middleware('auth');

Route::resource('/piezas', ComponentesController::class)->middleware('auth');

Route::resource('/inicio', ServicioController::class)->middleware('auth');

Auth::routes(['register' => 0, 'reset' => 0]);

Route::group(['middleware' => 'auth'],function () {
    Route::get('/', [ServicioController::class, 'index'])->name('home');  
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
