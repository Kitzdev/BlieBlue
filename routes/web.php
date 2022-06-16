<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
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

Route::get('/products', [ItemController::class, 'showProducts']);

Route::get('/service', function () {
    return view('services');
});

//Register
Route::get('/register',function () {
    return view('register');
});

//post Register
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/cart', function () {
    return view('cart');
});


// Dashboard item

// Item dashboard index page, show all items
Route::get('/dashboard/items', [ItemController::class, 'showItems']);

// Add item page
Route::get('/dashboard/items/add', function () {
    return view('item_add');
});

// Submit add item
Route::post('/dashboard/items/add/submit', [ItemController::class, 'addItem']);

// Edit item page
Route::get('/dashboard/items/edit/{item_id}', [ItemController::class, 'editItem']);

// Update item
Route::post('/dashboard/items/update/{item_id}', [ItemController::class, 'updateItem']);

// Delete item
Route::post('/dashboard/items/delete/{item_id}', [ItemController::class, 'deleteItem']);

// end of Dashboard item





// Dashboard user

// User dashboard index page, show all users
Route::get('/dashboard/users', [UserController::class, 'showUsers']);

// Add item
Route::get('/dashboard/users/add', function () {
    return view('user_add');
});

// Submit add item
Route::post('/dashboard/users/add/submit', [UserController::class, 'addUser']);

// Edit user page
Route::get('/dashboard/users/edit/{user_id}', [UserController::class, 'editUser']);

// Update item
Route::post('/dashboard/users/update/{user_id}', [UserController::class, 'updateUser']);

// Delete item
Route::post('/dashboard/users/delete/{user_id}', [UserController::class, 'deleteUser']);


// end of Dashboard user
