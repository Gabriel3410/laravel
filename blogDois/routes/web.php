<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostagemController;
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
/* Rotas posatagem */
Route::get('/', [PostagemController::class, 'index'])
->name('/postagem');

Route::get('postagem/{id}/edit', [PostagemController::class, 'edit'])
->name('postagem.edit');

Route::put('postagem/{id}', [PostagemController::class, 'update'])
->name('postagem.update');
 
Route::get('postagem/create', [PostagemController::class, 'create'])
->name('postagem.create');

Route::post('postagem/create', [PostagemController::class, 'store'])
->name('postagem.store');

Route::delete('postagem/{id}', [PostagemController::class, 'destroy'])
->name('postagem.destroy');

Route::get('postagem/{id}', [PostagemController::class, 'show'])
->name('postagem.show');
/*  Final */ 


/* Rota de autenticação */
Route::get('/', function () {
    return view('/dashboard');
});

Route::get('/dashboard', function () {
    return view('postagem/index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
/* Final */
