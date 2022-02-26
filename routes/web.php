<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\EditorialController;
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
    return view('libros/listar');
});

Route::get('/libros', [LibroController::class , 'listar']);

Route::get('/libros/crear', [LibroController::class , 'create']);

Route::post('/libros/crear', [LibroController::class , 'store']);

Route::get('/libros/crearEditorial', [LibroController::class , 'createEditorial']);

Route::post('/libros/crearEditorial', [LibroController::class , 'storeEditorial']);

Route::get('/libros/mostrarUno/{ISBN}', [LibroController::class , 'listarUno']);

Route::get('/libros/editar/{ISBN}', [LibroController::class , 'edit']);

//Route::get('/libros/update/{libro}', [LibroController::class , 'update']);

Route::post('/libros/realizarUpdate/{ISBN}', [LibroController::class , 'realizarUpdate']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
