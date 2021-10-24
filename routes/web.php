<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminMainController;
use App\Http\Controllers\AdminAuthController;

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

Route::GET('/', [MainController::class,'home_view']);
Route::GET('/about-us', [MainController::class,'about_view']);
Route::GET('/our-products', [MainController::class,'products_view']);
Route::GET('/products/category-products', [MainController::class,'cateogry_products_view']);
Route::GET('/products-detail', [MainController::class,'products_detail_view']);
Route::GET('/add-to-quote', [MainController::class,'add_to_quote_view']);
Route::GET('/quote-form', [MainController::class,'quote_form_view']);
Route::GET('/our-factory', [MainController::class,'factory_view']);
Route::GET('/blogs', [MainController::class,'blog_view']);
Route::GET('/blogs-detail', [MainController::class,'blog_detail_view']);
Route::GET('/contact-us', [MainController::class,'contact_view']);


// ===========Admin Routes============

Route::GET('/admin/dashboard', [AdminMainController::class,'index']);
Route::GET('/admin/login', [AdminAuthController::class,'login_view']);
Route::GET('/admin/all/categories', [AdminMainController::class,'all_categories_view']);
Route::GET('/admin/add/categories', [AdminMainController::class,'add_categories_view']);
Route::POST('/admin/add/categories', [AdminMainController::class,'add_categories'])->name('create.category');