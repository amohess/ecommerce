<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CheckoutPaymentController;
use App\Http\Controllers\CheckoutSuccessController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\OrderHistoryController;
// use App\Http\Controllers\subscriptions\SubscriptionController;
// use App\Http\Controllers\subscriptions\UserSubscriptionController;
use App\Http\Controllers\ProductController;
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

// Route to view the home page
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Another route to view the home page
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');

// Route to view the store
Route::get('/store', [ProductController::class, 'index'])->name('products.index');

// OLD ROUTE, stop, store
Route::get('/shop', [ProductController::class, 'index'])->name('shop.index');
Route::get('/products', [ProductController::class, 'index'])->name('store.index');

// Route to view the product details
Route::get('/details/{id}', [DetailController::class, 'index'])->name('shop.details');

Route::middleware(['auth'])->group(function () {
    // Route to load the cart page
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');

    // Route to add to cartfrom the details page
    Route::put('/cart', [CartController::class, 'store'])->name('cart.store');

    // Route to add to cart from the store page
    Route::get('/cart/add/{id}', [CartController::class, 'addToCartFromStore'])->name('cart.addfromstorepage');

    // Route to remove from cart
    Route::delete('/cart/{id}', [CartController::class, 'destroy'])->name('cart.destroy');

    // Route to load checkout page
    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');

    // Route to exchange points
    Route::post('/checkout/points', [CheckoutController::class, 'points'])->name('checkout.points');

    // Route for stripe prebuilt checkout
    Route::post('/checkout/payment/{payment}/1', [CheckoutPaymentController::class, 'index'])->name('checkout.stripe');

    // // Route for testing checkout without stripe
    Route::get('/checkout/{payment}/testing', [CheckoutPaymentController::class, 'index'])->name('checkout.success.testing');

    // Route for checkout successs with stripe
    Route::get('/checkout/success/{id}', [CheckoutSuccessController::class, 'index'])->name('checkout.success');

    // Route to show all orders
    Route::get('/order-history', [OrderHistoryController::class, 'index'])->name('order-history.index');

    // Route to show details for an order
    Route::get('/order-history/{id}', [OrderHistoryController::class, 'show'])->name('order-history.show');
});
