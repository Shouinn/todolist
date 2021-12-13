<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------0
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::any ('/',[\App\Http\Controllers\Toodocontroller::class,'index'])->name('index');
Route::get ('/create',[\App\Http\Controllers\Toodocontroller::class,'get_create_page'])->name('get_create_edge');
Route::post ('/create',[\App\Http\Controllers\Toodocontroller::class,'store_create_data'])->name('store');
