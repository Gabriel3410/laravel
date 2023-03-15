<?php

use App\Http\Controllers\ProdutoController;
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

// pagina inicial//
Route::get('/produto', [ProdutoController::class, 'index']) 
->name('produto.index');

//CREATE//
//Criação do formulário//
Route::get('/produto/create', [ProdutoController::class, 'create'])
->name('produto.create');

//Salvar o formulário//
Route::post('/produto/create', [ProdutoController::class, 'store'])
->name('produto/store');

Route::get('/produto/{id}', [ProdutoController::class ,'show'])
->name('produto.show');

//EDIT//
// Exibição do formulário com os dados do recurso //
Route::get('/produto/{id}/edit', [ProdutoController::class, 'edit'])
->name('produto.edit');

//Atualiza os dados do recurso passados pelo Formulário //
Route::put('/produto/{id}', [ProdutoController::class, 'update'])
->name('produto.update');

//DELETE//
Route::delete('/produto/{id}', [ProdutoController::class, 'destroy'])
->name('produto.destroy');
