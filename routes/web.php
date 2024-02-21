<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Http\Request;
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

Route::get('/', function (Request $request) {
//    dd($request->user()->id);
    return inertia('Index');
});

Route::get('/about', function () {
    return inertia('About');
});

Route::resource('login', LoginController::class)->only(['index', 'store']);
Route::resource('register', RegisterController::class)->only(['index', 'store']);
Route::get('/logout', [LoginController::class, 'destroy']);
