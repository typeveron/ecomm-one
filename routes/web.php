<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CartsController;

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

//connected productscontroller index
Route::get('/', [ProductsController::class, 'index']);

Auth::routes();

Route::post('/cart', [CartsController::class, 'store'])->name('cart');
Route::get('/checkout', [CartsController::class, 'index'])->name('checkout');