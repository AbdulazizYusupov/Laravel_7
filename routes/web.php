<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PostController;

Route::get('/', [ClientController::class, 'index']);

Route::get('/category', [CategoryController::class, 'index']);
Route::get('/create-category', [CategoryController::class, 'create']);
Route::post('/category', [CategoryController::class, 'store']);
Route::post('/delete-category', [CategoryController::class, 'destroy']);
Route::put('/update-category/{category}', [CategoryController::class, 'update'])->name('category.update');
Route::get('/category-search', [CategoryController::class, 'search'])->name('category.search');

Route::get('/post', [PostController::class, 'index']);
Route::get('/create-post', [PostController::class, 'create']);
Route::post('/post', [PostController::class, 'store']);
Route::post('/delete-post', [PostController::class, 'destroy']);
Route::put('/update-post/{post}', [PostController::class, 'update'])->name('post.update');
Route::get('/post-search', [PostController::class, 'search'])->name('post.search');

Route::get('/login', [AuthController::class, 'loginPage'])->name('loginPage');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/register', [AuthController::class, 'registerPage'])->name('registerPage');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('logout',[AuthController::class,'logout'])->name('logout');
