<?php

use App\Http\Controllers\MarkController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/products',[ProductController::class,'productList'])->name('product.index');

Route::get('/product/create',[ProductController::class,'productCreate'])->name('product.create');

Route::post('/product/store',[ProductController::class,'productStore'])->name('product.store');

Route::get('/products/edit/{productId}',[ProductController::class,'productEdit'])->name('product.edit');

Route::post('/products/update/{productId}',[ProductController::class,'productUpdate'])->name('product.update');

Route::get('/products/delete/{productId}',[ProductController::class,'productDelete'])->name('product.delete');

Route::get('/students/index',[StudentController::class,'index'])->name('students.index');

Route::get('/subjects/index',[SubjectController::class,'index'])->name('subjects.index');

Route::get('/marks/create',[MarkController::class, 'create'])->name('markes.create');

Route::post('/marks/store',[MarkController::class,'store'])->name('marks.store');

Route::get('/result/index',[ResultController::class,'index'])->name('result.index');
