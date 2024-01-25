<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\MarketController;
use App\Http\Controllers\Api\V1\CustomerController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// ROUTES THAT DONT NEED AUTH
// Route::get('search/{query}', [MarketController::class, 'index'])->name('market.index');    
Route::get('/marketplace', [MarketController::class, 'market'])->name('market.index');
Route::get('/contact', [MarketController::class, 'contact'])->name('market.contact');
Route::get('/search', [MarketController::class, 'search'])->name('market.search');
Route::get('/product/{id}', [MarketController::class, 'product'])->name('market.products.product');

Route::post('/signup', [CustomerController::class, 'signup']);
Route::post('/login', [CustomerController::class, 'login']);
Route::post('/forgot-password', [CustomerController::class, 'forgot_password']);

//ROUTES THAT NEED AUTH AND VERIFIED EMAIL
// fixme - should add verify in middleware
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/logout', [CustomerController::class, 'logout']);

    Route::get('/account', [CustomerController::class, 'account'])->name('customer.account');
    Route::post('/account', [CustomerController::class, 'updateAccount'])->name('customer.account.update');

    Route::get('/wishlist', [CustomerController::class, 'wishlist'])->name('customer.wishlist');
    Route::get('/cart', [CustomerController::class, 'cart'])->name('customer.cart');
    Route::get('/checkout', [CustomerController::class, 'checkout'])->name('customer.checkout');
});

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
