<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProductCategoryController;
use Illuminate\Support\Facades\Route;


Route::get('/products/{store:username}', [ProductsController::class, 'index'])->name('products');
Route::get('/product/{store:username}/{product}', [ProductsController::class, 'show'])->name('product.show');


Route::middleware('auth')->prefix("/mystore/{store:username}/")->name("product.")->group(function () {
    Route::get('/create', [ProductsController::class, 'create'])->name('create');
    Route::post('/store', [ProductsController::class, 'store'])->name('store');
    Route::get('/{product:id}', [ProductsController::class, 'edit'])->name('edit');
    Route::put('/update/{product}', [ProductsController::class, 'update'])->name('update');
    Route::delete('/delete/{product}', [ProductsController::class, 'destroy'])->name('destroy');
});

Route::middleware('auth')->prefix("/mystore/{store:username}/category/")->name("category.")->group(function () {
    Route::post('/store', [ProductCategoryController::class, 'store'])->name('store');
    Route::put('/update/{category}', [ProductCategoryController::class, 'update'])->name('update');
    Route::delete('/delete/{category}', [ProductCategoryController::class, 'destroy'])->name('destroy');
});