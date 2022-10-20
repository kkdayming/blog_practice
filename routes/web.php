<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UserController;
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

/**
 * Articles
 */
Route::get('/', [ArticleController::class, 'index']);
Route::get('/articles/create', [ArticleController::class, 'create'])->middleware('auth');
Route::post('/articles/store', [ArticleController::class, 'store'])->middleware('auth');
Route::get('/articles/manage', [ArticleController::class, 'manage'])->middleware('auth');
Route::get('/articles/{article}/edit', [ArticleController::class, 'edit'])->middleware('auth');
Route::delete('/articles/{article}', [ArticleController::class, 'destroy'])->middleware('auth');
Route::put('/articles/{article}', [ArticleController::class, 'update'])->middleware('auth');

/**
 * Users
 */
Route::get('/users/register', [UserController::class, 'create'])->middleware('guest');
Route::get('/users/login', [UserController::class, 'login'])->middleware('guest');
Route::post('/users', [UserController::class, 'store'])->middleware('guest');
Route::post('/users/logout', [UserController::class, 'logout'])->middleware('auth');
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
