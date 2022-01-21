<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductsController;

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
// laravel < 8 ic cacr routy senc en nshum
// Route::get("/products", "ProductsController@index");

// laravel 8+ senc
Route::get("/products", [ProductsController::class, "index"]);
Route::get("/products/show/{id}",[ProductsController::class, "show"]);
Route::get("/products/edit/{id}",[ProductsController::class, "edit"]);
Route::post("/products/edit/{id}",  [ProductsController::class, "update"]);

Route::post("/products/delete/{id}",  [ProductsController::class, "delete"]);