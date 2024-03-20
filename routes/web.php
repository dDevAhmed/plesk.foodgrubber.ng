<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\MarketController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CustomerController;

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
Route::get('/marketplace', [MarketController::class, 'market'])->name('market.index');    
Route::get('/contact', [MarketController::class, 'contact'])->name('market.contact');    
Route::get('/privacy', [MarketController::class, 'privacy'])->name('market.privacy');    
Route::get('/terms', [MarketController::class, 'terms'])->name('market.terms');    


Route::get('/filter-stores/{category}', [MarketController::class, 'filterStoresByCategory'])->name('market.store.filter');

Route::get('/search/{category}', [MarketController::class, 'search'])->name('market.search');    
Route::get('/store/{id}', [MarketController::class, 'store'])->name('market.stores.store'); 

// routes that need auth and verification
Route::get('/account', [CustomerController::class, 'account'])->name('customer.account');    
Route::post('/account', [CustomerController::class, 'updateAccount'])->name('customer.account.update');    

Route::get('/cart', [CartController::class, 'cart'])->name('cart.index');   
// Route::get('/cart/count', [CartController::class, 'getCartCount'])->name('cart.count');

Route::get('/get-cart-quantity', 'CartController@getCartQuantity')->name('get.cart.quantity');

Route::get('/cart/add/{id}', [CartController::class, 'addToCart'])->name('cart.add');
Route::get('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');
Route::get('/checkout', [CartController::class, 'checkout'])->name('cart.checkout');  

// Route::get('/wishlist', [CustomerController::class, 'wishlist'])->name('customer.wishlist'); 

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
