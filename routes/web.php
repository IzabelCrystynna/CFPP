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


