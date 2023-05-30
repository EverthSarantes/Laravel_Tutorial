<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

//Rutas para los Productos
Route::get('/products', [ProductController::class, 'index'])->name('products.index'); // Ruta para Mostrar los Productos
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create'); // Ruta para Crear los Productos
Route::post('/products', [ProductController::class, 'store'])->name('products.store'); // Ruta para Guardar los Productos

