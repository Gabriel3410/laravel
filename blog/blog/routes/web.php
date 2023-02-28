<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostagemController;


 
Route::get('/', [PostagemController::class, 'index']);
Route::get('postagem/{id}', [PostagemController::class, 'show'])->name('postagem.show');