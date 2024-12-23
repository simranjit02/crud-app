<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/products/create', [productController::class, 'createPrducts'])->name('products.create');
Route::post('/products', [productController::class, 'storePrducts'])->name('products.store');