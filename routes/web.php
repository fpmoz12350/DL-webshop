<?php

use App\Models\User;
use App\Models\Role;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;



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

Route::get('/', [HomeController::class, 'index'])->name('welcome');
Route::get('/o-nama', [HomeController::class, 'aboutUs'])->name('about_us');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/terms', [HomeController::class, 'terms'])->name('terms');

Route::get('/home', function () {
    return view('home');
})->middleware('auth')->name('home');

Route::get('/users', [UserController::class, 'index'])->middleware('auth')->name('users-index');
Route::get('/user/create', [UserController::class, 'create'])->middleware('auth')->name('users-create');
Route::post('/user/store', [UserController::class, 'store'])->middleware('auth')->name('users-store');
Route::get('/user/show/{id}', [UserController::class, 'show'])->middleware('auth')->name('users-show');
Route::get('/user/edit/{id}', [UserController::class, 'edit'])->middleware('auth')->name('users-edit');
Route::patch('/user/update/{user}', [UserController::class, 'update'])->middleware('auth')->name('users-update');
Route::delete('/user/destroy/{user}', [UserController::class, 'destroy'])->middleware('auth')->name('users-destroy');

Route::get('/roles', [RoleController::class, 'index'])->middleware('auth')->name('roles-index');
Route::get('/role/create', [RoleController::class, 'create'])->middleware('auth')->name('roles-create');
Route::post('/role/store', [RoleController::class, 'store'])->middleware('auth')->name('roles-store');
Route::get('/role/show/{id}', [RoleController::class, 'show'])->middleware('auth')->name('roles-show');
Route::get('/role/edit/{id}', [RoleController::class, 'edit'])->middleware('auth')->name('roles-edit');
Route::patch('/role/update/{role}', [RoleController::class, 'update'])->middleware('auth')->name('roles-update');
Route::delete('/role/destroy/{role}', [RoleController::class, 'destroy'])->middleware('auth')->name('roles-destroy');

Route::get('/permissions', [PermissionController::class, 'index'])->middleware('auth')->name('permissions-index');
Route::get('/permission/create', [PermissionController::class, 'create'])->middleware('auth')->name('permissions-create');
Route::post('/permission/store', [PermissionController::class, 'store'])->middleware('auth')->name('permissions-store');
Route::get('/permission/show/{id}', [PermissionController::class, 'show'])->middleware('auth')->name('permissions-show');
Route::get('/permission/edit/{id}', [PermissionController::class, 'edit'])->middleware('auth')->name('permissions-edit');
Route::patch('/permission/update/{permission}', [PermissionController::class, 'update'])->middleware('auth')->name('permissions-update');
Route::delete('/permission/destroy/{permission}', [PermissionController::class, 'destroy'])->middleware('auth')->name('permissions-destroy');

Route::get('/products', [ProductController::class, 'index'])->middleware('auth')->name('products-index');
Route::get('/product/create', [ProductController::class, 'create'])->middleware('auth')->name('products-create');
Route::post('/product/store', [ProductController::class, 'store'])->middleware('auth')->name('products-store');
Route::get('/product/show/{id}', [ProductController::class, 'show'])->middleware('auth')->name('products-show');
Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->middleware('auth')->name('products-edit');
Route::patch('/product/update/{product}', [ProductController::class, 'update'])->middleware('auth')->name('products-update');
Route::delete('/product/destroy/{product}', [ProductController::class, 'destroy'])->middleware('auth')->name('products-destroy');

Route::get('/categories', [CategoryController::class, 'index'])->middleware('auth')->name('categories-index');
Route::get('/categories/create', [CategoryController::class, 'create'])->middleware('auth')->name('categories-create');
Route::post('/categories/store', [CategoryController::class, 'store'])->middleware('auth')->name('categories-store');
Route::get('/categories/show/{id}', [CategoryController::class, 'show'])->middleware('auth')->name('categories-show');
Route::get('/categories/edit/{id}', [CategoryController::class, 'edit'])->middleware('auth')->name('categories-edit');
Route::patch('/categories/update/{categories}', [CategoryController::class, 'update'])->middleware('auth')->name('categories-update');
Route::delete('/categories/destroy/{categories}', [CategoryController::class, 'destroy'])->middleware('auth')->name('categories-destroy');

Route::get('/shop', [ShopController::class, 'index'])->name('shop');


