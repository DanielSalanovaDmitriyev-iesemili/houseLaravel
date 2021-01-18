<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\HomeController;


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


//enseñar todas las casas
Route::get('/', [HouseController::class, 'tuto'])->name('tuto'); //compras
Route::get('/alquilar', [HouseController::class, 'tuto_alquilar'])->name('alquilar'); //alquileres
//enseñar una casa seleccionada
Route::get('/show/{casa}', [HouseController::class, 'show'])->name('show');
//enseñar comentarios de una casa en particular
Route::get('/show/{casa}/comment', [HouseController::class, 'comment'])->name('comment');
//logins
Route::get('/login', [HouseController::class, 'login'])->name('login'); //en el plantilla blade en el footer se activa
Route::get('/login/create', [HouseController::class, 'createUser'])->name('login.create');
Route::get('/login/sign', [HouseController::class, 'loginUser'])->name('login.sign');
Route::get('/login/out', [HouseController::class, 'logOut'])->name('login.out');
//Filtro de casas
Route::get('/filtred/tuto',[HouseController::class, 'filter'])->name('filter');


//formulario prueba No hacer caso a esto
Route::get('/form', [HomeController::class, 'index'])->name('form');
Route::get('/form/store', [HomeController::class, 'store'])->name('form.store');
//Route::get('/', [HouseController::class, 'index'])->name('home');
Route::get('/create', [HouseController::class, 'data'])->name('data');