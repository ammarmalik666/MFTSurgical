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

Route::GET('/admin/login', [AdminAuthController::class,'login_view']);
Route::POST('/admin/login', [AdminAuthController::class,'loginAdmin'])->name('admin.login');

// ===========Admin Routes============
Route::group(['middleware' => ['AdminAuth']], function(){

	Route::GET('/admin/dashboard', [AdminMainController::class,'index']);
	Route::GET('/admin/all/categories', [AdminMainController::class,'all_categories_view']);
	Route::GET('/admin/add/categories', [AdminMainController::class,'add_categories_view']);
	Route::POST('/admin/add/categories', [AdminMainController::class,'add_categories'])->name('create.category');
	Route::GET('/admin/all/products', [AdminMainController::class,'all_products_view']);
	Route::GET('/admin/view/{id}/product', [AdminMainController::class,'product_view']);
	Route::GET('/admin/add/products', [AdminMainController::class,'add_products_view']);
	Route::POST('/admin/add/products', [AdminMainController::class,'add_product'])->name('create.product');
	Route::GET('/admin/edit/product/{id}', [AdminMainController::class,'edit_product_view']);
	Route::POST('/admin/edit/products', [AdminMainController::class,'edit_product'])->name('update.product');
	Route::GET('/admin/archive/products', [AdminMainController::class,'archive_products_view']);
	Route::GET('/admin/trash/products', [AdminMainController::class,'trash_products_view']);
	Route::POST('/admin/archive/product', [AdminMainController::class,'product_archive'])->name('archive.product');
	Route::POST('/admin/unarchive/product', [AdminMainController::class,'product_unarchive'])->name('unarchive.product');
	Route::POST('/admin/trash/product', [AdminMainController::class,'product_trash'])->name('delete.product_trash');
	Route::POST('/admin/delete/product', [AdminMainController::class,'product_delete'])->name('delete.product_delete_permanent');

	Route::GET('/admin/product/enquiries', [AdminMainController::class,'product_enquiries_view']);
	Route::GET('/admin/contact/enquiries', [AdminMainController::class,'contact_enquiries_view']);
	Route::GET('/admin/subscribers', [AdminMainController::class,'all_subscribers_view']);
	Route::GET('/admin/logout', [AdminAuthController::class,'logout']);
});