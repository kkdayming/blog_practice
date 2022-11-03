<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\RelationController;

// test
Route::get('/', function () {
    return response("health", 200);
});

Route::controller(RelationController::class)
    ->prefix('relation')
    ->group(function () {
        Route::get('/countryPosts','countryPosts');
        Route::get('/userPhotos','userPhotos');
        Route::get('/articlePhotos','articlePhotos');
        Route::get('/photoImagables','photoImagables');
        Route::get('/articleTags','articleTags');
        Route::get('/videoTags','videoTags');
        Route::get('/tagTaggable','tagTaggable');
    });

// article
Route::controller(ArticleController::class)
    ->prefix('articles')
    ->group(function () {
        Route::get('/search','searchResult');
        Route::post('/search','search');
});
Route::apiResource('articles', ArticleController::class);

//  user
Route::controller(UserController::class)
    ->prefix('users')
    ->group(function () {
        Route::get('/verify/{verifyCode}',  'verify');
        Route::post('/', 'store');
        Route::post('/logout', 'logout')->middleware('auth');;
        Route::post('/authenticate', 'authenticate');
    });

// mail
Route::controller(MailController::class)
    ->prefix('mails')
    ->group(function () {
        Route::post('/verify', 'verify');
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
        Route::get('/where', 'where');
        Route::get('/wherein', 'wherein');
        Route::get('/chunk', 'chunk');
        Route::get('/count', 'count');
        Route::get('/first', 'first');
        Route::get('/firstwhere', 'firstwhere');
        Route::get('/tap', 'tap');
    });

// Helper
Route::controller(RequestController::class)
    ->prefix('request')
    ->group(function () {
        Route::post('/', 'request');
    });
