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


Route::prefix('admins')->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    });

    Route::get('/login', function () {
        return view('admin.login');
    })->name("admin-login");

    Route::post('/login', [AuthenticationController::class, 'Authenticate']);
});
