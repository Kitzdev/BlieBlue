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

Route::get('/services', function () {
    return view('services');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/dashboard/product', function () {
    return view('dashboard_products');
});

Route::get('/dashboard/member', function () {
    return view('dashboard_member');
});


// Dashboard Item...

// Add item
Route::get('/dashboard/items/add', function () {
    return view('item_add');
});

// Submit add item
Route::post('/dashboard/items/add/submit', [ItemController::class, 'addItem']);

// Show all items
Route::get('/dashboard/items', [ItemController::class, 'showItems']);

// Edit item page
Route::get('/dashboard/items/edit/{item_id}', [ItemController::class, 'editItem']);

// Update item
Route::post('/dashboard/items/update/{item_id}', [ItemController::class, 'updateItem']);

// Delete item
Route::post('/dashboard/items/delete/{item_id}', [ItemController::class, 'deleteItem']);

// end of Dashboard Item
