<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostagemController;



Route::get('/', [PostagemController::class, 'index'])
->name('/postagem');

Route::get('postagem/create', [PostagemController::class, 'create'])
->name('postagem.create');

Route::post('postagem/create', [PostagemController::class, 'store'])
->name('postagem.store');

Route::delete('postagem/{id}', [PostagemController::class, 'destroy'])
->name('postagem.destroy');

Route::get('postagem/{id}', [PostagemController::class, 'show'])
->name('postagem.show');

