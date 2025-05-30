<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;

Route::get('/', function () {
    return view('welcome');
});

// Brand model
Route::get('/brands', [DemoController::class, 'GetAllBrand'] );
Route::get('/brands-with-products', [DemoController::class, 'GetAllBrandWithProducts'] );
Route::get('/brand/{id}', [DemoController::class, 'FindSingleBrand'] );
Route::get('/brand-column', [DemoController::class, 'GetColumn'] );
Route::get('/brands-selected-column', [DemoController::class, 'GetSelectedColumn'] );
Route::post('/create-brand', [DemoController::class, 'CreateBrand'] );
Route::post('/update-brand/{id}', [DemoController::class, 'UpdateBrand'] );
Route::post('/update-or-create-brand/{brandName}', [DemoController::class, 'UpdateOrCreateBrand'] );
Route::get('/delete-brand/{id}', [DemoController::class, 'DeleteBrand'] );

// Product model
Route::get('/products-with-brands', [DemoController::class, 'GetAllProductsWithBrand'] );
Route::get('/increment/{id}', [DemoController::class, 'PriceIncrement']);
Route::get('/decrement/{id}', [DemoController::class, 'PriceDecrement']);
Route::get('/aggregates', [DemoController::class, 'Aggregates']);
Route::get('/orders', [DemoController::class, 'Order']);
Route::get('/pagination', [DemoController::class, 'Pagination']);