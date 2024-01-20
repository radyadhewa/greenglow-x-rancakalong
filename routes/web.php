<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ShopController;
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

//Bagian Permasalahan Login dan Register
// ADA BAGIAN YANG KUHAPUS YA GES KARENA SUDAH DIWAKILKAN SAMA YANG INI
// DAN KALAU KULIAT ITU DI 

Route::get('/', [SessionController::class, 'LoginForm'])->name('login');


Route::get('/login', [SessionController::class, 'LoginForm']) -> name('login.form');
Route::post('/login', [SessionController::class, 'login']) -> name('login.store');
Route::get('/register', [SessionController::class, 'RegisterForm']) -> name('register.form');
Route::post('/register', [SessionController::class, 'register']) -> name('register.store');

//========================================================================================//
// FITUR HOME

Route::get('/home', [HomeController::class, 'home'])->name('home');

//========================================================================================//
// INI FITUR YANG JELASIN TENTANG GREENGLOW
Route::get('/about', [HomeController::class, 'about'])->name('about');

//========================================================================================//
// INI FITUR TENTANG DESA RANCAKALONG
Route::get('/rancakalong', [HomeController::class, 'rancakalong'])->name('rancakalong');

//========================================================================================//
// INI FITUR BLOG TENTANG APA AJA SIH PRODUK DARI RANCAKALONG
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');

//========================================================================================//
// INI FITUR UNTUK KONTAK PIHAK RANCAKALONG TAPI BELUM ADA VIEW KHUSUSNYA
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

//========================================================================================//
// INI FITUR KERANJANG TAPI KEKNYA GAKEPAKE KARNA BAKAL LANGSUNG DIARAHIN KE SHOPEE ATAU TOKPED
Route::get('/cart', [ShopController::class, 'cart'])-> name('cart');

//========================================================================================//
// INI FITUR TENTANG SHOP
Route::get('/shop', [ShopController::class, 'shop']);
Route::get('/shop{slug}', [ShopController::class, 'detail']);

//========================================================================================//
// INI FITUR Masukin Data Buat Admin
Route::get('/admin/create', [AdminController::class, 'create']) -> name('create');