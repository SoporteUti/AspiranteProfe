<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\AspirantesController;
use App\Http\Controllers\DocentesController;
use App\Http\Controllers\RequisitosController;
use App\Http\Controllers\ModulosController;
use App\Http\Controllers\NotasController;
/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('/Aspirantes', function () {
    return view('Aspirantes.lista');
});*/
//Route::get('Aspirantes',[AspirantesController::class,'lista']);

Route::get('/', function () {
    return view('welcome');
});

Route::resource('Aspirantes',AspirantesController::class);


Route::resource('Docentes',DocentesController::class);

Route::resource('Modulos',ModulosController::class);

Route::resource('Notas',NotasController::class);

//Route::resource('Modulo',[ModulosController::class,'lista']);

//Route::resource('Notas',[NotasController::class,'lista']);

//Route::resource('Requisitos',[RequisitosController::class,'lista']);

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
