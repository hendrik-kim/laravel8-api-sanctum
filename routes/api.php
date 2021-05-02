<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::resource('products', ProductController::class);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get(
        '/products/search/{name}',
        [ProductController::class, 'search']
    );
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
