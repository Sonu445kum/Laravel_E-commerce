<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Admin\ProductAdminController;

//  Homepage — sabhi products list karega
Route::get('/', [ProductController::class, 'index'])->name('products.index');
//  Single Product Page
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');
//  Dashboard (protected route)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//  Authenticated User Routes (Profile Edit, Update, Delete)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//  Admin Routes — middleware se protected
Route::middleware(['auth', 'isAdmin'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('products', ProductAdminController::class);
});

//  Auth routes (Laravel Breeze / Jetstream ke liye)
require __DIR__ . '/auth.php';
