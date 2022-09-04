<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Auth::routes();


Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\FrontendController::class, 'index']);

Route::get('/blogs', [App\Http\Controllers\FrontendController::class, 'blogList']);

Route::get('/blog-create', [App\Http\Controllers\BackendController::class, 'blogCreate'])->name('blogCreate');
