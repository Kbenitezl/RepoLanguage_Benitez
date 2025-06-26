<?php
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Redirect root URL to categories
Route::get('/', function () {
    return redirect()->route('categories.index');
});

Route::resource('categories', CategoryController::class)->names([
    'index' => 'categories.index',
    'create' => 'categories.create',
    'store' => 'categories.store',
    'edit' => 'categories.edit',
    'update' => 'categories.update',
    'destroy' => 'categories.destroy',
]);

Route::resource('products', ProductController::class)->names([
    'index' => 'products.index',
    'create' => 'products.create',
    'store' => 'products.store',
    'edit' => 'products.edit',
    'update' => 'products.update',
    'destroy' => 'products.destroy',
]);