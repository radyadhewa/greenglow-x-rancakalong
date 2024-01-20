<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SessionController;
use Illuminate\Contracts\Session\Session;

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
    return view('login');
});

Route::get('/tes', function () {
    return view('tes');
});
Route::get('/home', function () {
    return view('home');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/index', [HomeController::class, 'index'])->name('home');

Route::get('/regist', function () {
    return view('regist');
});

// login register logout
Route::get('/', [SessionController::class, 'index']);
Route::post('index', [SessionController::class, 'login']);
Route::get('regist', [SessionController::class, 'register']);
Route::post('/', [SessionController::class, 'create']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/rancakalong', function () {
    return view('rancakalong');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/cart', function () {
    return view('cart');
});
