<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::resource('students', App\Http\Controllers\StudentController::class);
Route::resource('ammavadis', App\Http\Controllers\AmmavadiController::class);
Route::resource('ProductCategories', App\Http\Controllers\ProductCategoryController::class);
Route::resource('cms', App\Http\Controllers\CmsController::class);
Route::resource('ServiceCategories', App\Http\Controllers\ServiceCategoryController::class);
Route::resource('services', App\Http\Controllers\ServiceController::class);
Route::resource('products', App\Http\Controllers\ProductsController::class);
Route::resource('productCategories', App\Http\Controllers\ProductCategoryController::class);
Route::resource('serviceCategories', App\Http\Controllers\ServiceCategoryController::class);

Route::get('remove-multiple-cms-image-item/{id}/{key}', [App\Http\Controllers\CmsController::class, 'removeGalleryItem']);