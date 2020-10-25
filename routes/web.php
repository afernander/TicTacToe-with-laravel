<?php

use App\Http\Controllers\gamecontroller;
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

Route::view('/','index')->name('index');
Route::view('/about','about')->name('about');
//Route::view('/game','game')->name('game')->middleware('auth');
Route::view('/login','login')->name('login');
Route::view('/layouts/app','app')->name('app');
Route::view('/past','past')->name('past')->middleware('auth');
Route::get('/game', [App\Http\Controllers\gamecontroller::class,'game'])->name('game')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('game', [App\Http\Controllers\gamecontroller::class, 'game'])->middleware('auth');
Route::get('/past', [App\Http\Controllers\gamecontroller::class, 'index'])->name('past.index');
Route::post('/game/create', [gamecontroller::class,'store'])->name('game.store')->middleware('auth');