<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
    // return redirect('/admin');
});
Route::get('/home', [ProductController::class, 'home'])->name('home');

Route::get('/products/{category}/{subcategory}/{tag}', [ProductController::class, 'productList'])->name('products.list');

Route::get('/products/{category}/{subcategory}', [ProductController::class, 'productListBySubCategory'])->name('products.bySubCategory');

Route::get('/women', [ProductController::class, 'women'])->name('women');
Route::get('/men', [ProductController::class, 'men'])->name('men');
Route::get('/kids', [ProductController::class, 'kids'])->name('kids');
Route::get('/home_kitchen', [ProductController::class, 'home_kitchen'])->name('home_kitchen');
Route::get('/cart', [CartController::class, 'cart'])->name('cart.index');
Route::post('/cart/add/{product}', [CartController::class, 'add'])->name('cart.add');
Route::post('/cart/update/{product}', [CartController::class, 'update'])->name('cart.update');
Route::delete('/cart/remove/{product}', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/checkout', [CheckoutController::class, 'checkout'])->name('checkout');
Route::post('/payment/success', [CheckoutController::class, 'paymentSuccess'])->name('payment.success');