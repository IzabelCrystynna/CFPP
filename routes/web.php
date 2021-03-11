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
Route::get('/', function () {
    return view('layout.inicio');
})->name('index');
Route::get('/login', function () {
    return view('layout.login');
})->name('login');
Route::get('/cadastro', function () {
    return view('layout.cadastro');
})->name('cadastro');
Route::get('/teste', function () {
    return view('teste');
});


Route::get('/compra/add', function () {
    return view('Compras.cadastrar');
});


Route::resource('clientes', 'ClienteController');
Route::resource('produtos', 'ProdutoController');
Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
require __DIR__.'/auth.php';
