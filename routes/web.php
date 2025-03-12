<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventoController;


Route::get('/', [EventoController::class, 'index'])->name('posts.index');
Route::get('/evento/{id}', [EventoController::class, 'show'])->name('posts.show');
