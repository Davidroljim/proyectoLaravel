<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\EditorialController;
use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\PDFController;
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

Route::get('', [LibroController::class , 'listar']);

Route::get('/libros', [LibroController::class , 'listar']);

Route::get('/libros/crear', [LibroController::class , 'create'])->middleware('auth');

Route::post('/libros/crear', [LibroController::class , 'store'])->middleware('auth');

Route::get('/libros/crearEditorial', [LibroController::class , 'createEditorial'])->middleware('auth');

Route::post('/libros/crearEditorial', [LibroController::class , 'storeEditorial'])->middleware('auth');

Route::get('/libros/mostrarUno/{ISBN}', [LibroController::class , 'listarUno']);

Route::get('/libros/editar/{ISBN}', [LibroController::class , 'edit'])->middleware('auth');

Route::post('/libros/realizarUpdate/{ISBN}', [LibroController::class , 'realizarUpdate'])->middleware('auth');

Route::get('/emails/mail_view', [SendEmailController::class, 'create']);

Route::post('/emails/mail_view', [SendEmailController::class , 'store']);

Route::get('/emails/mailListar_view', [SendEmailController::class, 'index'])->middleware('auth');

Route::get('/libros/crearPDF/', [PDFController::class, 'pdfLibros']);
Route::get('/libros/crearPDFLibro/{ISBN}', [PDFController::class, 'pdfLibro']);

Route::get('/home',function(){
    return view ('layouts.index');
});

Route::get('/login',function(){
    return view ('auth.login');
});

Route::get('/contact',function(){
    return view ('layouts.contact');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
