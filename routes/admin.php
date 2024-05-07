<?php

use App\Http\Controllers\Admin\AuthenticationController;
use App\Http\Controllers\UserController;
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



Route::group(['middleware' => ['guest']], function () {
    // Place your authenticated routes here
    Route::get('/admin-panel/login', function () {
        return view('admin.login');
    })->name("admin-login");
    Route::post('/admin-panel/login', [AuthenticationController::class, 'Authenticate']);
    // Add more authenticated routes as needed
});



Route::prefix('admin-panel')->middleware(['admin'])->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    });
    Route::get('/categories', function () {
        return view('admin.categories');
    });
});