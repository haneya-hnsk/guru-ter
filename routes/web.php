<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoteController;

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
    return view('layouts.app');
})->name('index');


Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::group(['middleware' => ["auth", "checkstatus", ]], function () {
   Route::get('/voting', [VoteController::class, 'index']);
   Route::post('/voting', [VoteController::class, 'store']);
})->name("main-vote");


Route::get('/success', [VoteController::class, 'success'])->middleware('auth');
