<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Models\Shop;
use App\Models\Order;
use App\Models\Product;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
});

Route::controller(ShopController::class)->group(function () {
    Route::get('/shop/create', function () { return Inertia::render('Shop/Create'); })->middleware('auth');
    Route::post('/shop/create', 'create')->middleware('auth');
    Route::get('/shop/show/{id}', 'show')->middleware('auth');
});

Route::controller(ProductController::class)->group(function () {
    Route::get('/product/create', function () { return Inertia::render('Product/Create', [ 'shops' => Shop::all() ]); })->middleware('auth');
    Route::post('/product/create', 'create')->middleware('auth');
    Route::get('/product/show/{id}', 'show')->middleware('auth');
});


Route::get('/dashboard', function () {
    return Inertia::render('Dashboard', [
        'shops' => Shop::all(),
        'products' => Product::all(),
        'orders' => Order::all(),
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
