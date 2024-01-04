<?php

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

Route::get('/', function () {
    return view('index');
});
Route::get('/contact',  function ()  {
    return view('contact');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('signup');
});
Route::get('/category', function () {
    return view('category');
});
Route::get('/product-detail', function () {
    return view('single-product');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/confirmation', function () {
    return view('confirmation');
});
Route::get('/tracking', function () {
    return view('tracking');
});