<?php

use App\Http\Controllers\ProductController;
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
// Route::view('product', 'product');
Route::get('product',[ProductController::class,'index']);
Route::view('about', 'about');
Route::view('/product/add', 'post.add_product');
Route::view('/product/edit', 'post.edit_product');
