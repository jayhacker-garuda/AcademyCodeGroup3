<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});



Route::get("/login",[LoginController::class,"index"])->name("Login");
Route::post("/log",[LoginController::class,"login"])->name("On-Login");


Route::get("/register",[RegisterController::class,"index"])->name("Register");
Route::post("/register/store",[RegisterController::class,"store"]);

Route::post("/logout",[LogoutController::class,"logout"])->name("Logout");

Route::get("/dashboard",[DashboardController::class,"index"])->name("Dashboard");


