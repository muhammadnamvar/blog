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
});
/*
Route::get('foo', function () {
    return 'Hello World';
});

Route::get('/bar', function (){
    return 'Hello___World';
});

Route::get('welcome', function (){
    return 'welcome';
});

Route::match(['get', 'post'], '/match', function (){
    return "I get uri with match method: get or post";
});

Route::any('/any', function (){
    return "I get uri with any method";
});

Route::redirect('/welcom', 'welcome');

Route::redirect('/welcome2', '/welcome', 301);

Route::redirect('/welcome3', '/welcome', 302);

Route::get('/login', function (){
    return view('login');
});

Route::view('/sign', 'login');

Route::view('sign_in', 'sign_in', ['name' => 'ali']);

Route::get('/home', [HomeController::class, 'index']);

Route::get('/start', [HomeController::class, 'start']);

Route::get('/try', [HomeController::class, 'try']);
*/

Route::get('/categories/create', [CategoryController::class, 'create'])->name('category.create');

Route::POST('/categories/store', [CategoryController::class, 'store'])->name('category.store');

Route::get('/create', [CreateController::class, 'create']);

Route::get('/article/{id}', [ArticleController::class, 'index']);

Route::get('/post', [PostController::class, 'index']);

Route::get('/order', [OrderController::class, 'index'])->name('order');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories');

Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('category.show');






