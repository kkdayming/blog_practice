<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MailController;
use Illuminate\Routing\RouteGroup;

// article
Route::apiResource('articles', ArticleController::class);
Route::post('/articles/{article}/{visible}', [ArticleController::class, 'visible']);

//  user
Route::group(['prefix' => 'users'], function () {
    Route::get('/', [UserController::class, 'check']);
    Route::get('/verify/{verifyCode}', [UserController::class, 'verify']);
    Route::post('/', [UserController::class, 'store']);
    Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');
    Route::post('/authenticate', [UserController::class, 'authenticate']);
});

// mail
Route::group(['prefix' => 'mails'], function () {
    Route::post('/verify', [MailController::class, 'verify']);
});
