<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\MarketController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [AppController::class, 'index'])->name('foodgrubber.index');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// no need for auth routes
// Route::get('search/{query}', [MarketController::class, 'index'])->name('market.index');    
Route::get('/home', [MarketController::class, 'index'])->name('market.index');    
Route::get('/search', [MarketController::class, 'search'])->name('market.search');    
Route::get('/product/{id}', [MarketController::class, 'product'])->name('market.products.product');  

// routes that need auth
Route::get('/account', [MarketController::class, 'account'])->name('customer.account');    
Route::get('/cart', [MarketController::class, 'cart'])->name('customer.cart');    
Route::get('/checkout', [MarketController::class, 'checkout'])->name('customer.checkout');    

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
