<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventoController;


Route::get('/', [EventoController::class, 'index'])->name('eventos.index'); 

Route::get('/eventos', [EventoController::class, 'show'])->name('eventos.show');

Route::get('/create', [EventoController::class, 'create'])->name('eventos.create');

Route::post( "/create", [EventoController::class, 'agregar'])->name('eventos.agregar');

Route::get('/evento/{id}', [EventoController::class, 'show'])->name('posts.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
        