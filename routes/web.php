<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product/{product}', [ProductController::class, 'show'])->name('product.show');

require __DIR__.'/auth.php';
