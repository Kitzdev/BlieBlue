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
    return view('landing_page');
});

Route::get('/about', function () {
    return view('about_us');
});

Route::get('/contact', function () {
    return view('contact_us');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/service', function () {
    return view('services');
});
