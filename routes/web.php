<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\FoodCategoriesController;
use App\Http\Controllers\StaticPagesController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\FoodItemsController;
use App\Http\Controllers\admin\CustomersController;
use App\Http\Controllers\admin\UsersController;
use App\Http\Controllers\admin\MemberController;
use App\Http\Controllers\admin\ReservationController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\SettingController;
use App\Models\GeneralSetting;
use App\Models\SeoSetting;
use App\Models\SocialSetting;

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
Route::get('/menu/{slug}', [StaticPagesController::class, 'singleMenu']);
Route::get('/about', [StaticPagesController::class, 'about']);
Route::get('/reservations', [StaticPagesController::class, 'reservations']);
Route::post('/reservations', [StaticPagesController::class, 'saveReservation']);
Route::get('/reservations/thank-you', [StaticPagesController::class, 'thankYou']);
Route::get('/contact', [StaticPagesController::class, 'contact']);
Route::get('/offers', [StaticPagesController::class, 'offers']);
Route::post('/offers', [StaticPagesController::class, 'registerMember']);
Route::get('/offers/thank-you', [StaticPagesController::class, 'thankYou']);


// Admin Dashboard
Route::get('/admin', [AdminController::class, 'dashboard']);
Route::get('/admin/estimated-revenue-daily', [AdminController::class, 'dailyRevenueLast30']);

// Admin Food Categories
Route::get('/admin/food-categories', [FoodCategoriesController::class, 'index'])->middleware('role:Admin');
Route::get('/admin/food-categories/create', [FoodCategoriesController::class, 'create'])->middleware('role:Admin');
Route::post('/admin/food-categories', [FoodCategoriesController::class, 'store'])->middleware('role:Admin');
Route::get('/admin/food-categories/{id}/edit', [FoodCategoriesController::class, 'edit'])->middleware('role:Admin');
Route::put('/admin/food-categories/{id}', [FoodCategoriesController::class, 'update'])->middleware('role:Admin');
Route::delete('/admin/food-categories/{id}/delete', [FoodCategoriesController::class, 'delete'])->middleware('role:Admin');

// Admin Food Items
Route::get('/admin/food-items', [FoodItemsController::class, 'index'])->middleware('role:Admin');
Route::get('/admin/food-items/create', [FoodItemsController::class, 'create'])->middleware('role:Admin');
Route::post('/admin/food-items', [FoodItemsController::class, 'store'])->middleware('role:Admin');
Route::get('/admin/food-items/{id}/edit', [FoodItemsController::class, 'edit'])->middleware('role:Admin');
Route::put('/admin/food-items/{id}', [FoodItemsController::class, 'update'])->middleware('role:Admin');
Route::delete('/admin/food-items/{id}/delete', [FoodItemsController::class, 'delete'])->middleware('role:Admin');

// Admin Customers
// Admin Members
Route::get('/admin/members', [MemberController::class, 'index']);
Route::delete('/admin/members/{id}/delete', [MemberController::class, 'delete']);

// Admin Reservations
Route::get('/admin/reservations', [ReservationController::class, 'index']);
Route::delete('/admin/reservations/{id}/delete', [ReservationController::class, 'delete']);

// Admin Settings
Route::get('/admin/settings/general', [SettingController::class, 'general'])->middleware('role:Admin');
Route::put('/admin/settings/general', [SettingController::class, 'saveGeneral'])->middleware('role:Admin');
Route::get('/admin/settings/seo', [SettingController::class, 'seo'])->middleware('role:Admin');
Route::put('/admin/settings/seo', [SettingController::class, 'saveSeo'])->middleware('role:Admin');
Route::get('/admin/settings/social', [SettingController::class, 'social'])->middleware('role:Admin');
Route::put('/admin/settings/social', [SettingController::class, 'saveSocial'])->middleware('role:Admin');


// Admin Users
Route::get('/admin/users', [UsersController::class, 'index'])->middleware('role:Admin');
Route::get('/admin/users/create', [UsersController::class, 'create'])->middleware('role:Admin');
Route::post('/admin/users', [UsersController::class, 'store'])->middleware('role:Admin');
Route::get('/admin/users/{id}/edit', [UsersController::class, 'edit'])->middleware('role:Admin');
Route::put('/admin/users/{id}', [UsersController::class, 'update'])->middleware('role:Admin');
Route::delete('/admin/users/{id}/delete', [UsersController::class, 'delete'])->middleware('role:Admin');

// Admin Authentication
Route::get('/admin/register', function () {
    return view('admin/register');
});

Route::get('/admin/login', function () {
    return view('admin/login');
});
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
View::composer(['home', 'pages.about', 'pages.contact', 'pages.offers', 'pages.reservations', 'pages.thank-you', 'menu.all-categories', 'menu.single-menu'], function($view) {
    $general_settings = GeneralSetting::find(1);
    $seo_settings = SeoSetting::find(1);
    $social_settings = SocialSetting::find(1);

    $view->with('settings', [
        'general' => $general_settings,
        'seo' => $seo_settings,
        'social' => $social_settings
    ]);
});
