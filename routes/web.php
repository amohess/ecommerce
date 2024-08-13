<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CheckoutPaymentController;
use App\Http\Controllers\CheckoutSuccessController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\ProductController;
// use App\Http\Controllers\subscriptions\SubscriptionController;
// use App\Http\Controllers\subscriptions\UserSubscriptionController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');

Route::get('/store', [ProductController::class, 'index'])->name('products.index');

Route::get('/shop', [ProductController::class, 'index'])->name('shop.index');
Route::get('/products', [ProductController::class, 'index'])->name('store.index');

Route::get('/details/{id}', [DetailController::class, 'index'])->name('shop.details');

// Route::get('subscriptions', [SubscriptionController::class, 'index'])->name('subscriptions.index');

Route::middleware(['auth'])->group(function () {
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');

    Route::put('/cart', [CartController::class, 'store'])->name('cart.store');

    Route::get('/cart/add/{id}', [CartController::class, 'addToCartFromStore'])->name('cart.addfromstorepage');

    Route::delete('/cart/{id}', [CartController::class, 'destroy'])->name('cart.destroy');

    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');

    Route::post('/checkout/points', [CheckoutController::class, 'points'])->name('checkout.points');

    Route::post('/checkout/payment/{payment}/1', [CheckoutPaymentController::class, 'index'])->name('checkout.stripe');

    Route::get('/checkout/{payment}/testing', [CheckoutPaymentController::class, 'index'])->name('checkout.success.testing');

    Route::get('/checkout/success/{id}', [CheckoutSuccessController::class, 'index'])->name('checkout.success');

    // Route::post('subscriptions/{id}', [SubscriptionController::class, 'puchase'])->name('subscriptions.purchase');

    // Route::get('subscriptions/success/{id}', [SubscriptionController::class, 'success'])->name('subscriptions.success');
});

/*
Route::prefix('user')->middleware(['auth'])->group(function () {
    Route::get('/subscriptions', [UserSubscriptionController::class, 'index'])->name('subscriptions.index');
    Route::delete('/subscriptions/{id}', [UserSubscriptionController::class, 'destroy'])->name('subscriptions.destroy');
    Route::put('/subscriptions/{id}', [UserSubscriptionController::class, 'update'])->name('subscriptions.update');
});
*/
