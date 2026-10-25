<?php

use App\Http\Controllers;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [Controllers\BaseController::class, 'getIndex']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [Controllers\ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [Controllers\ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('catalog', [CatalogController::class, 'getIndex'])->name('catalog.index');
Route::get('catalog/{catalog}', [CatalogController::class, 'getOne'])->name('catalog.one');
Route::get('product/{product}', [ProductController::class, 'getIndex'])->name('product.index');