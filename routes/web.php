<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComputadorController;
use App\Http\Controllers\CarrinhoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/carinho', [CartController::class, 'index'])->name('cart');
    Route::get('/computador', [ComputadorController::class, 'index'])->name('computadores.index');
    Route::resource('computadores', ComputadorController::class);
    Route::prefix('carrinho')->group(function () {
    Route::post('/adicionar/{id}', [CarrinhoController::class, 'adicionar'])->name('carrinho.adicionar');
    Route::get('/visualizar', [CarrinhoController::class, 'visualizar'])->name('carrinho.visualizar');
    Route::delete('/remover/{id}', [CarrinhoController::class, 'remover'])->name('carrinho.remover');
});
});

require __DIR__.'/auth.php';
