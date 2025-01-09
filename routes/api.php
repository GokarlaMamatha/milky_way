<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('students', App\Http\Controllers\API\StudentAPIController::class)
    ->except(['create', 'edit']);

Route::resource('ammavadis', App\Http\Controllers\API\AmmavadiAPIController::class)
    ->except(['create', 'edit']);

Route::resource('ProductCategories', App\Http\Controllers\API\ProductCategoryAPIController::class)
    ->except(['create', 'edit']);

Route::resource('cms', App\Http\Controllers\API\CmsAPIController::class)
    ->except(['create', 'edit']);

Route::resource('ServiceCategories', App\Http\Controllers\API\ServiceCategoryAPIController::class)
    ->except(['create', 'edit']);

Route::resource('services', App\Http\Controllers\API\ServiceAPIController::class)
    ->except(['create', 'edit']);

Route::resource('ProductCategories', App\Http\Controllers\API\ProductCategoryAPIController::class)
    ->except(['create', 'edit']);

Route::resource('products', App\Http\Controllers\API\ProductsAPIController::class)
    ->except(['create', 'edit']);

Route::resource('productCategories', App\Http\Controllers\API\ProductCategoryAPIController::class)
    ->except(['create', 'edit']);

Route::resource('serviceCategories', App\Http\Controllers\API\ServiceCategoryAPIController::class)
    ->except(['create', 'edit']);