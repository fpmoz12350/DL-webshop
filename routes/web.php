<?php

use App\Models\User;
use App\Models\Role;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;



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
Route::get('/article1', [HomeController::class, 'article1'])->name('article1');
Route::get('/article2', [HomeController::class, 'article2'])->name('article2');
Route::get('/article3', [HomeController::class, 'article3'])->name('article3');


Route::get('/cv', function () {
    return view('cv');
});

Route::group(['prefix' => 'admin'], function() {

        Route::group(['middleware' => ['role:administrator|moderator|radnik-na-pakiranju']], function() {
            Route::get('/home', function () {
                return view('home');
            })->middleware('auth')->name('home');

            Route::get('/orders', [OrderController::class, 'index'])->middleware('auth')->name('orders-index');
            Route::get('/orders/show/{id}', [OrderController::class, 'show'])->middleware('auth')->name('orders-show');
            Route::delete('/orders/destroy/{orders}', [OrderController::class, 'destroy'])->middleware('auth')->name('orders-destroy');
            Route::post('toggledeliver/{orderId}', [OrderController::class, 'toggleDeliver'])->middleware('auth')->name('toggle-deliver');
        });

        Route::group(['middleware' => ['role:administrator|moderator']], function() {
            

            Route::get('/users', [UserController::class, 'index'])->middleware('auth')->name('users-index');
            Route::get('/user/show/{id}', [UserController::class, 'show'])->middleware('auth')->name('users-show');

            Route::get('/roles', [RoleController::class, 'index'])->middleware('auth')->name('roles-index');
            Route::get('/role/show/{id}', [RoleController::class, 'show'])->middleware('auth')->name('roles-show');

            Route::get('/permissions', [PermissionController::class, 'index'])->middleware('auth')->name('permissions-index');
            Route::get('/permission/show/{id}', [PermissionController::class, 'show'])->middleware('auth')->name('permissions-show');

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
            Route::get('categories/{category}/up', [CategoryController::class, 'up'])->name('categories-up');
            Route::get('categories/{category}/down', [CategoryController::class, 'down'])->name('categories-down');
            Route::get('categories/reorder', [CategoryController::class, 'reorder'])->name('categories-reorder');
            Route::get('categories/{category}/filter', [CategoryController::class, 'filter'])->name('categories-filter');

            Route::get('/comments', [CommentController::class, 'index'])->middleware('auth')->name('comments-index');
            Route::get('/comments/create', [CommentController::class, 'create'])->middleware('auth')->name('comments-create');
            Route::post('/comments/store', [CommentController::class, 'store'])->middleware('auth')->name('comments-store');
            Route::get('/comments/show/{id}', [CommentController::class, 'show'])->middleware('auth')->name('comments-show');
            Route::delete('/comments/destroy/{comments}', [CommentController::class, 'destroy'])->middleware('auth')->name('comments-destroy');

        });

        Route::group(['middleware' => ['role:administrator']], function() {
            Route::get('/user/create', [UserController::class, 'create'])->middleware('auth')->name('users-create'); 
            Route::post('/user/store', [UserController::class, 'store'])->middleware('auth')->name('users-store');
            Route::get('/user/edit/{id}', [UserController::class, 'edit'])->middleware('auth')->name('users-edit');
            Route::patch('/user/update/{user}', [UserController::class, 'update'])->middleware('auth')->name('users-update');
            Route::delete('/user/destroy/{user}', [UserController::class, 'destroy'])->middleware('auth')->name('users-destroy');

            Route::get('/role/create', [RoleController::class, 'create'])->middleware('auth')->name('roles-create');
            Route::post('/role/store', [RoleController::class, 'store'])->middleware('auth')->name('roles-store');
            Route::get('/role/edit/{id}', [RoleController::class, 'edit'])->middleware('auth')->name('roles-edit');
            Route::patch('/role/update/{role}', [RoleController::class, 'update'])->middleware('auth')->name('roles-update');
            Route::delete('/role/destroy/{role}', [RoleController::class, 'destroy'])->middleware('auth')->name('roles-destroy');

            Route::get('/permission/create', [PermissionController::class, 'create'])->middleware('auth')->name('permissions-create');
            Route::post('/permission/store', [PermissionController::class, 'store'])->middleware('auth')->name('permissions-store');
            Route::get('/permission/edit/{id}', [PermissionController::class, 'edit'])->middleware('auth')->name('permissions-edit');
            Route::patch('/permission/update/{permission}', [PermissionController::class, 'update'])->middleware('auth')->name('permissions-update');
            Route::delete('/permission/destroy/{permission}', [PermissionController::class, 'destroy'])->middleware('auth')->name('permissions-destroy');
        });
    
    
 });


Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::get('/shop/search/{word?}/{id?}', [ShopController::class, 'search'])->name('search');
Route::get('/product/{product}', [ShopController::class, 'product'])->name('product');
Route::get('/shop/category/{category}', [ShopController::class, 'category'])->name('category');
Route::get('/shop/no-category', [ShopController::class, 'index'])->name('no-category');
Route::get('/products/{product_id}', [ShopController::class, 'productComment'])->middleware('auth')->name('product-comment');
Route::get('/shop/{id}', [ShopController::class, 'profile'])->middleware('auth')->name('profile');
Route::patch('/shop/profile/{id}', [ShopController::class, 'profileUpdate'])->middleware('auth')->name('profile-update');

Route::get('/shop/cart/store-order', [ShopController::class, 'storeOrder'])->middleware('auth')->name('store-order');

Route::resource('/cart', CartController::class);
Route::get('/cart/add-item/{id}', [CartController::class, 'addItem'])->name('cart.addItem');
Route::get('/shop/add-to-cart', [ShopController::class, 'addToCart'])->name('add-to-cart');
Route::get('/shop/cart-counter', [ShopController::class, 'cartCounter'])->name('cart-counter');

Route::get('/orders/create', [OrderController::class, 'create'])->middleware('auth')->name('orders-create');
Route::get('/orders/store/', [OrderController::class, 'store'])->middleware('auth')->name('orders-store');
Route::get('contact', [ContactController::class, 'contact'])->name('contact');
Route::post('send-message', [ContactController::class, 'sendEmail'])->name('contact.send');
