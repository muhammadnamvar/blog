<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CategoryController;


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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/categories/create', [CategoryController::class, 'create'])->name('category.create');

Route::POST('/categories/store', [CategoryController::class, 'store'])->name('category.store');


Route::get('/categories', [CategoryController::class, 'index'])->name('categories');

Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('category.show');


Route::get('/categories/edit/{category}', [CategoryController::class, 'edit'])->name('category.edit');

Route::PUT('/categories/update/{category}', [CategoryController::class, 'update'])->name('category.update');


Route::get('/categories/destroy/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');


//Route::get('/create', [CreateController::class, 'create']);

//Route::get('/article/{id}', [ArticleController::class, 'index']);

Route::get('/post', [PostController::class, 'index']);

Route::get('/order', [OrderController::class, 'index'])->name('order');









Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
