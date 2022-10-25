<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MailController;
use Illuminate\Routing\RouteGroup;

//test
use App\Models\Article;
use App\Models\Role;
use App\Models\User;
use App\Models\Country;
use App\Models\Photo;
use App\Models\Video;

Route::get('/', function () {
    return Country::find(1)->articles; // hasManyThrough
    // return User::find(1)->photos; // poly
    // return Article::find(1)->photos; // poly
    // return Photo::find(1)->imageable; // poly
    // return Article::find(1)->tags;
    // return Article::find(2)->tags;
    // return Video::find(1)->tags;
});

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
