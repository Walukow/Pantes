<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\TransactionController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/collection', [CollectionController::class, 'index'])->name('collection');

Route::post('/collection', [CollectionController::class, 'store'])->name('storeCart');

Route::middleware('auth')->group(function () {
    
    Route::get('/cart', [CartController::class, 'index'])->name('cart');
    
    Route::post('/cart/action', [CartController::class, 'actCart'])->name('actCart');

    Route::post('/cart/all', [CartController::class, 'storeAll'])->name('storeAllOrder');
    
    Route::get('/transaction', [TransactionController::class, 'index'])->name('transaction');
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';
