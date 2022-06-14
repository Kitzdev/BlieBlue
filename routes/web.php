<?php

use Illuminate\Support\Facades\Route;
use App\Models\Item;
use App\Http\Controllers\ItemController;

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

// Testing ...

// Default page (dashboard)
Route::get('/dashboard', [ItemController::class, 'index']);

// Show all items
Route::get('/dashboard/items', [ItemController::class, 'showItems']);

// Add item
Route::post('/dashboard/items/add', [ItemController::class, 'addItem']);

// Search item
Route::get('/dashboard/items/{item_id}', [ItemController::class, 'searchItemRow']);

// Update item
Route::post('/dashboard/items/{item_id}/update', [ItemController::class, 'updateItem']);

// Delete item
Route::post('/dashboard/items/{item_id}/delete', [ItemController::class, 'deleteItem']);

// ... CRUD operation.

// Testing sbadmin
Route::get('/tables', function () {
    return view('tables');
});