<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoteController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CommitController;
use App\Http\Controllers\LogoutController;

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


Route::post('/logout', [LogoutController::class, 'logout'])->middleware('auth')->name('logout');

Route::group(['middleware' => ["guest"]], function () { 
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate']);
})->name("login-group");


Route::group(['middleware' => ["auth", "checkstatus", "plainuser", "plainuser2" ]], function () {
    Route::get('/voting', [VoteController::class, 'index']);
    Route::post('/voting', [VoteController::class, 'store']);
    Route::get('/', function () {
        return view('welcome');
    })->name('index');
})->name("main-vote");

Route::get('/success', [VoteController::class, 'success']);



Route::get('/admin', [AdminController::class, 'index'])->middleware('checkadmin');

Route::get('/commit', [CommitController::class, 'index'])->middleware('checkcommit');



