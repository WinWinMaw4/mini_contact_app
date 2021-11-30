<?php

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
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact',[ContactController::class,'index'])->name('index');
Route::get('/contact/create',[ContactController::class,'create'])->name('create');
Route::get('/contact/{id}',[ContactController::class,'show'])->name('show');
Route::post('/contact',[ContactController::class,'store'])->name('store');
Route::delete('/contact/{id}',[ContactController::class,'destory'])->name('destory');
Route::get('/contact/{id}/edit',[ContactController::class,'edit'])->name('edit');
Route::put('/contact/{id}/update',[ContactController::class,'update'])->name('update');
