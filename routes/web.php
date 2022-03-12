<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\DinosauriosController;

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

Route::get('/', [ApiController::class,'raiz'])->name('raiz');

Route::get('/index', [ApiController::class, 'index'])->name('index');
//Vistas dinosaurios

Route::get('/dinosaurios/{id}', [ApiController::class, 'dinosaurios'])->name('dinosaurios');

Route::get('/consultarDinosaurios', [DinosauriosController::class,'consultarDinosaurios']) ->name('consultarDinosaurios');
Route::get('/consultarDinosaurio/{id}', [DinosauriosController::class,'consultarDinosaurio']) ->name('consultarDinosaurio');


//Vistas animales
Route::get('/Animales/{id}', [ApiController::class, 'Animales'])->name('Animales');

