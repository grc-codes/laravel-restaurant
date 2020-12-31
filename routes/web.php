<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\FoodCategoriesController;
use App\Http\Controllers\StaticPagesController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\FoodItemsController;

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

// Static Pages
Route::get('/', [StaticPagesController::class, 'home']);
Route::get('/menu', [StaticPagesController::class, 'menu']);
Route::get('/menu/id', [StaticPagesController::class, 'singleMenu']);
Route::get('/about', [StaticPagesController::class, 'about']);
Route::get('/waitlist', [StaticPagesController::class, 'waitlist']);
Route::get('/contact', [StaticPagesController::class, 'contact']);
Route::get('/offers', [StaticPagesController::class, 'offers']);

// Admin Dashboard
Route::get('/admin', [AdminController::class, 'dashboard']);

// Admin Food Categories
Route::get('/admin/food-categories', [FoodCategoriesController::class, 'index']);
Route::get('/admin/food-categories/create', [FoodCategoriesController::class, 'create']);
Route::get('/admin/food-categories/{id}/edit', [FoodCategoriesController::class, 'edit']);

// Admin Food Items
Route::get('/admin/food-items', [FoodItemsController::class, 'index']);
Route::get('/admin/food-items/create', [FoodItemsController::class, 'create']);
Route::get('/admin/food-items/{id}/edit', [FoodItemsController::class, 'edit']);

// Admin Authentication
Route::get('/admin/register', function () {
    return view('admin/register');
});

Route::get('/admin/login', function () {
    return view('admin/login');
});