<?php

//use App\Http\Controllers\ProdutosController;

use App\Http\Controllers\ProdutosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('produtos/novo', [ProdutosController::class, 'create'])->name('produtos.novo');
Route::post('/produtos/novo', [ProdutosController::class, 'store'])->name('registrar_produto');
Route::get('produtos/ver/{id}', [ProdutosController::class, 'show'])->name('produtos_show');
Route::get('produtos/editar/{id}', [ProdutosController::class, 'edit'])->name('produtos_show');
Route::get('produtos/editar/{id}', [ProdutosController::class, 'update'])->name('alterar_produto');
//Route::post('/produtos/ver/{id}', [ProdutosControler::class 'show'])->name('produtos_show');
//Route::get('/produtos/novo', 'App\Http\Controllers\ProdutosController@create')->name('produtos.novo');