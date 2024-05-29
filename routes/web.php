<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\SubCategoryController;
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
    Route::get('/cart', [CartController::class, 'index']);
    Route::post('/add-to-cart', [CartController::class, 'create']);
    Route::put('/add-to-cart/{id}', [CartController::class, 'update']);
});

Route::get('/confirmation', [StripeController::class, 'confirmation'])->name('confirmation');

// Route::get('/tracking', function () {
//     return view('tracking');
// });

// Route::get('/checkout', function () {
//     return view('checkout');
// });


Route::post('/checkout', [StripeController::class, 'index'])->name('checkout');
Route::get('/success', [StripeController::class, 'success'])->name('success');
Route::get('/cancel', [StripeController::class, 'cancel'])->name('cancel');
Route::get('/', [ProductController::class, 'show']);
Route::get('/product-detail/{id}', [ProductController::class, 'singleProduct']);
Route::get('/brands/{id}', [BrandController::class, 'show']);
Route::get('/sub_categories/{id}', [SubCategoryController::class, 'show']);
Route::get('/product-detail', function () {
    return view('single-product');
});
Route::get('/contact',  function () {
    return view('contact');
});



// Route::group(['middleware' => 'guest'], function () {
// Place your authenticated routes her
Route::get('/login', [UserController::class, 'Login'])->name('login');
Route::post('/login', [UserController::class, 'Authenticate']);
Route::get('/register', [UserController::class, 'Register'])->name('resgiter');
Route::post('/submit', [UserController::class, 'Create']);
// Add more authenticated routes as needed
// });
