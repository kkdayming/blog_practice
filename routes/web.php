<?php

use App\Http\Controllers\ArticleWebController;
use App\Http\Controllers\UserWebController;
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
// Route::get('/', [ArticleWebController::class, 'index']);

// Route::middleware('auth')->group(['prefix' => 'articles'], function () {
//     Route::get('/create', [ArticleWebController::class, 'create']);
//     Route::post('/store', [ArticleWebController::class, 'store']);
//     Route::get('/manage', [ArticleWebController::class, 'manage']);
//     Route::get('/{article}/edit', [ArticleWebController::class, 'edit']);
//     Route::delete('/{article}', [ArticleWebController::class, 'destroy']);
//     Route::put('/{article}', [ArticleWebController::class, 'update']);
// });


/**
 * Users
 */
// Route::group(['prefix' => 'users'], function () {
//     Route::post('/', [UserWebController::class, 'store'])->middleware('guest');
//     Route::get('/login', [UserWebController::class, 'login'])->middleware('guest');
//     Route::get('/register', [UserWebController::class, 'create'])->middleware('guest');
//     Route::post('/logout', [UserWebController::class, 'logout'])->middleware('auth');
//     Route::post('/authenticate', [UserWebController::class, 'authenticate']);
// });
