<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostagemController;

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

Route::get('/', [PostagemController::class, 'index'])
    ->name('postagem.index');

Route::get('postagem/{id}', [PostagemController::class, 'show'])
    ->name('postagem.show');

