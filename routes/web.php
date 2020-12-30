<?php

use App\Models\User;
use App\Models\Role;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
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

Route::get('/', function () {
    return view('welcome');
});

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


