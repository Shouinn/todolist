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

Route::get ('/',[\App\Http\Controllers\Toodocontroller::class,'index'])->name('index');

//create
Route::get ('/create',[\App\Http\Controllers\Toodocontroller::class,'get_create_page'])->name('get_create_edge');
Route::post ('/create',[\App\Http\Controllers\Toodocontroller::class,'store_create_data'])->name('store_create_data');
//delete
Route::get ('/delete',[\App\Http\Controllers\Toodocontroller::class,'delete_data'])->name('delete_data');
//edit
Route::get ('/edit',[\App\Http\Controllers\Toodocontroller::class,'get_edit_page'])->name('get_edit_page');
Route::post ('/edit',[\App\Http\Controllers\Toodocontroller::class,'store_edit_data'])->name('store_edit_data');
