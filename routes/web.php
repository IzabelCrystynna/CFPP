<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Cliente;
use App\Http\Controllers\CompraController;

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
Route::get('/perfil', function () {
	$user=User::get();
    return view('layout.perfil', ['users'=>$user]);
})->name('perfil');
/* Rotas relacionadas ao controlador de Clientes */
Route::resource('clientes', 'ClienteController');

/* Rotas relacionadas ao controlador de Produtos */
Route::resource('produtos', 'ProdutoController');

/* Rotas relacionadas ao controlador de Compra */
Route::resource('compras', 'CompraController')->except(['store']);
Route::post('compras/store/{produto}', [CompraController::class, 'store'])->name('compras.store')->middleware(['auth']);

/* Rotas relacionadas ao controlador de Compras Produtos */
Route::resource('compra_produtos', 'CompraProdutoController');
Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
require __DIR__.'/auth.php';
