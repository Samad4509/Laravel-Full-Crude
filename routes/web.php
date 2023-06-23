<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Dashbord\DashbordController;

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

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/detail/{id}',[HomeController::class,'detail'])->name('detail');


Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard',[DashbordController::class,'index'])->name('dashboard');
    Route::get('/add-product',[ProductController::class,'addProduct'])->name('add-product');
    Route::post('/add-product',[ProductController::class,'create'])->name('add-product');
    Route::get('/manage-product',[ProductController::class,'show'])->name('manage-product');
    Route::get('/edit-product/{id}',[ProductController::class,'edit'])->name('edit-product');
    Route::post('/update-product/{id}',[ProductController::class,'update'])->name('update-product');
    Route::get('delete-product/{id}',[ProductController::class,'destroy'])->name('delete-product');
});
