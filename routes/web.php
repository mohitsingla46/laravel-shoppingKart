<?php

use App\Http\Controllers\admin\LoginController;
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
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [LoginController::class,'index'])->name('admin');
    Route::post('/login', [LoginController::class,'login']);
    Route::post('/logout', [LoginController::class,'logout']);
});
