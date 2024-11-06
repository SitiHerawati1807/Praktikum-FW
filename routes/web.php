<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;

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
});

require __DIR__ . '/auth.php';

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'RoleCheck:admin'])->name('dashboard');



Route::get('/products', [ProductController::class, 'index'])->name('product-index');
Route::get('/product/create', [ProductController::class, 'create'])->name('product-create');
Route::post('/product', [ProductController::class, 'store'])->name('product-store');
Route::get('/product/{id}', [ProductController::class, 'show']);
Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->name('product-edit');
Route::put('/product/{id}', [ProductController::class, 'update'])->name('product-update');
Route::delete('/product/{id}', [ProductController::class, 'destroy'])->name('product-deleted');


Route::get('/supplier', [SupplierController::class, 'index']);
Route::get('/supplier/create', [SupplierController::class, 'create'])->name("supplier-create");
Route::post('/supplier', [SupplierController::class, 'store'])->name("supplier-store");
Route::get('/supplier/{id}', [SupplierController::class, 'show']);
Route::get('/supplier/{id}/edit', [SupplierController::class, 'edit']);
Route::put('/supplier/{id}', [SupplierController::class, 'update']);
Route::delete('/supplier/{id}', [SupplierController::class, 'destory']);
