<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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

Route::group(["middleware" => ['auth']], function () {
    Route::get('/', [HomeController::class, 'home'])->name('home');
});



Route::group(["perfix" => "auth"], function () {
    Route::get("login", [AuthController::class, "login"])->name('auth.login');
    Route::get("register", [AuthController::class, "register"])->name('auth.register');
    Route::post("store", [AuthController::class, "store"])->name('auth.store');
    Route::post("attempt", [AuthController::class, "attempt"])->name('auth.attempt');
    Route::get('logout', [AuthController::class, 'logout'])->name('auth.logout');
});
