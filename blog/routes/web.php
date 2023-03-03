<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostagemController;


 
Route::get('/', [PostagemController::class, 'index'])
->name('postagem.index');

Route::get('postagem/{id}', [PostagemController::class, 'show'])
->name('postagem.show');

Route::get('postagem/create', [PostagemController::class, 'create'])
->name('postagem.create');