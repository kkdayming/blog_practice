<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Routing\RouteGroup;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\HelperController;

// test
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

//  user
Route::controller(UserController::class)
    ->prefix('users')
    ->group(function () {
        Route::get('/', 'check');
        Route::get('/verify/{verifyCode}',  'verify');
        Route::post('/', 'store');
        Route::post('/logout', 'logout')->middleware('auth');;
        Route::post('/authenticate', 'authenticate');
    });

// mail
Route::controller(MailController::class)
    ->prefix('mails')
    ->group(function () {
        Route::get('/verify', 'verify');
    });

// collection
Route::controller(CollectionController::class)
    ->prefix('collection')
    ->group(function () {
        Route::get('/', 'index');
        Route::get('/filter',  'filter');
        Route::get('/pluck', 'pluck');
        Route::get('/contains', 'contains');
        Route::get('/groupby', 'groupby');
        Route::get('/sortby', 'sortby');
        Route::get('/partition', 'partition');
        Route::get('/reject', 'reject');
        Route::get('/wherein', 'wherein');
        Route::get('/chunk', 'chunk');
        Route::get('/count', 'count');
        Route::get('/first', 'first');
        Route::get('/firstwhere', 'firstwhere');
        Route::get('/tap', 'tap');
    });

// Helper
Route::controller(HelperController::class)
    ->prefix('helper')
    ->group(function () {
        Route::get('/', 'test');
    });
