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

Route::get('/', function () {
    return view('welcome');
});

Route::get('template', function () {
    return view('template.backend.base');
});

// back end

Route::get('beranda', function () {
    return view('template.backend.beranda');
});

Route::get('kategori', function () {
    return view('template.backend.kategori');
});

Route::get('produk', function () {
    return view('template.backend.produk');
});

Route::get('profil', function () {
    return view('template.backend.profil');
});

// login
Route::get('login', function () {
    return view('template.login.login');
});


// front end
Route::get('front', function () {
    return view('template.frontend.front');
});


Route::get('home', function () {
    return view('template.frontend.home');
});

Route::get('about', function () {
    return view('template.frontend.about');
});

Route::get('shop', function () {
    return view('template.frontend.shop');
});

Route::get('contact', function () {
    return view('template.frontend.contact');
});

Route::get('baseproduk', function () {
    return view('template.frontend.baseproduk');
});

Route::get('produkshop', function () {
    return view('template.frontend.produkshop');
});

Route::get('produkshop2', function () {
    return view('template.frontend.produkshop2');
});

Route::get('produkshop3', function () {
    return view('template.frontend.produkshop3');
});

Route::get('produkshop4', function () {
    return view('template.frontend.produkshop4');
});

Route::get('produkshop5', function () {
    return view('template.frontend.produkshop5');
});

Route::get('produkshop6', function () {
    return view('template.frontend.produkshop6');
});