<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\ArticleController;
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

Route::get('/create', [CreateController::class, 'create']);

Route::get('/article/{id}', [ArticleController::class, 'index']);
