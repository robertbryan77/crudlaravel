<?php

//use App\Http\Controllers\ProdutosController;

use App\Http\Controllers\ProdutosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('produtos/list', [ProdutosController::class, 'list'])->name('produtos.list');
Route::get('produtos/novo', [ProdutosController::class, 'create'])->name('produtos.novo');
Route::post('/produtos/novo', [ProdutosController::class, 'store'])->name('registrar_produto');
Route::get('produtos/ver/{id}', [ProdutosController::class, 'show'])->name('produtos_show');
Route::get('produtos/editar/{id}', [ProdutosController::class, 'edit'])->name('produtos_show');
Route::put('produtos/editar/{id}', [ProdutosController::class, 'update'])->name('alterar_produto');
Route::get('/produtos/excluir/{id}', [ProdutosController::class, 'delete'])->name('deletar_produto');
Route::delete('/produtos/excluir/{id}', [ProdutosController::class, 'destroy'])->name('excluir_produto');