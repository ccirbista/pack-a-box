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
    $products = Product::latest();
    if(request('search'))
    {
        $products->where('name', 'like', '%' .request('search') .'%');
        
    }
    return view('home', [
        'products' => $products->get(),
    ]);
    
});

Route::get('/products', function () {

    $products = Product::latest();
    if(request('search'))
    {
        $products->where('name', 'like', '%' .request('search') .'%');
        
    }
    

    return view('products', [
        "products" => $products->get(),
    ]);
});

Route::get('/products/{product:name}', function (Product $product) {
    return view('product', [
        "product" => $product,
    ]);
});

Route::get('/boxes', function () {

    $boxes = Box::latest();
    if(request('search'))
    {
        $boxes->where('name', 'like', '%' .request('search') .'%');
        
    }

    return view('boxes', [
        "boxes" => $boxes->get(),
    ]);
});

Route::get('/boxes/{box:name}', function (Box $box) {
    return view('box', [
        "box" => $box,
    ]);
});

Route::get('/products/{product:name}/findBox', [ProductController::class, 'findBox']);

Route::post('/products/multiple', [ProductController::class, 'store']);

