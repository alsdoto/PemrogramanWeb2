<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
    return view('welcome');
});

Route::resource('products', ProductController::class);
Route::get('productsTrash/', [ProductController::class, 'trash'])->name('products.trash');
Route::get('productsTrash/{product}', [ProductController::class, 'restore'])->name('products.restore');
Route::delete('productsTrash/{product}', [ProductController::class, 'forceDelete'])->name('products.forceDelete');