<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\HomeController;

// Home Route:

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');

Route::get('/cart/show', [CartController::class, 'show'])->name('cart.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');




// Route::get('/', function () {
//     return view('home.index');
// });

// Categorie Routes:

Route::get('/categories', [CategorieController::class, 'index'])->name('categories.index');

Route::get('/categories/create', [CategorieController::class, 'create'])->name('categories.create');

Route::post('/categories', [CategorieController::class, 'store'])->name('categories.store');

Route::get('/categories/show/{id}', [CategorieController::class, 'show'])->name('categories.show');
// ->where('id', '[0-9]+'); we need it if we add create this route before 'create route'

Route::get('/categories/edit/{id}', [CategorieController::class, 'edit'])->name('categories.edit');

Route::put('/categories/{id}', [CategorieController::class, 'update'])->name('categories.update');

Route::delete('/categories/{id}', [CategorieController::class, 'destroy'])->name('categories.destroy');

// Clients Routes:

Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');

Route::get('/clients/create', [ClientController::class, 'create'])->name('clients.create');

Route::post('/clients/store', [ClientController::class, 'store'])->name('clients.store');

Route::get('/clients/show/{id}', [ClientController::class, 'show'])->name('clients.show');

Route::get('/clients/edit/{id}', [ClientController::class, 'edit'])->name('clients.edit');

Route::put('/clients/update/{id}', [ClientController::class, 'update'])->name('clients.update');

Route::delete('/clients/{id}', [ClientController::class, 'destroy'])->name('clients.destroy');

// Product Routes:

Route::get('/products', [ProductController::class, 'index'])->name('products.index');

Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');

Route::post('/product/store', [ProductController::class, 'store'])->name('products.store');

Route::get('/products/show/{id}', [ProductController::class, 'show'])->name('products.show');

Route::get('/products/edit/{id}', [ProductController::class, 'edit'])->name('products.edit');

Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');

Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');

// Orders Routes:

Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');

Route::get('/orders/show/{id}', [OrderController::class, 'show'])->name('orders.show');

Route::get('/orders/edit/{id}', [OrderController::class, 'edit'])->name('orders.edit');

Route::put('/orders/{id}', [OrderController::class, 'update'])->name('orders.update');

Route::delete('/orders/{id}', [OrderController::class, 'destroy'])->name('orders.destroy');







});

require __DIR__.'/auth.php';





