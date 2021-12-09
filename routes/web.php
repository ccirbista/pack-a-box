<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Models\Product;
use App\Models\Box;

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
    return view('home');
});

Route::get('/products', function () {
    return view('products', [
        "products" => Product::all(),
    ]);
});

Route::get('/products/{product:name}', function (Product $product) {
    return view('product', [
        "product" => $product,
    ]);
});

Route::get('/boxes', function () {
    return view('boxes', [
        "boxes" => Box::all(),
    ]);
});

Route::get('/boxes/{box:name}', function (Box $box) {
    return view('box', [
        "box" => $box,
    ]);
});

Route::get('/products/{product:name}/findBox', [ProductController::class, 'findBox']);