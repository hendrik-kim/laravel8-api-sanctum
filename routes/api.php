<?php

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/products', function () {
    return Product::all();
});

Route::post('/products', function () {
    return Product::create(['name' => 'Product One', 'slug' => 'product-slug', 'descr' => 'description', 'price' => 99.99]);
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
