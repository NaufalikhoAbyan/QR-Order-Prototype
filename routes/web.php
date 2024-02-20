<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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
    return inertia('Index');
});

Route::get('/about', function () {
    return inertia('About');
});

Route::resource('login', LoginController::class)->only(['index', 'store', 'destroy']);
Route::resource('register', RegisterController::class)->only(['index', 'store', 'destroy']);
