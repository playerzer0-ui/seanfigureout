<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\HomeController;
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
    return redirect()->route("signup");
});

Route::get("/signup", [HomeController::class, "signup"])->name("signup");
Route::post("/signOrLogin", [HomeController::class, "signOrLogin"])->name("signOrLogin");
Route::get("/logout", [HomeController::class, "logout"])->name("logout");
//90b506ab40dd02e536a6df819e7eb099

Route::post('/get-island-buildings', [GameController::class, 'getIslandBuildings']);
Route::get("/game", [GameController::class, "game"])->name("game");