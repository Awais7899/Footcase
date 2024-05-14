<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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


require __DIR__ . '/admin.php';



Route::group(['middleware' => ['auth', 'user']], function () {
    // Place your authenticated routes here
    Route::get('/', function () {
        return view('index');
    });
    // Add more authenticated routes as needed
});



Route::get('/contact',  function () {
    return view('contact');
});

// Route::group(['middleware' => 'guest'], function () {
    // Place your authenticated routes here
    Route::get('/login', [UserController::class, 'Login'])->name('login');
    Route::post('/login', [UserController::class, 'Authenticate']);
    Route::get('/register', [UserController::class, 'Register'])->name('resgiter');
    Route::post('/submit', [UserController::class, 'Create']);
    // Add more authenticated routes as needed
// });

// Route::get('/register', function () {
//     return view('signup');
// });

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
// Route::get('/test', function () {
//     return view('admin.index');
// });
