<?php

use Illuminate\Routing\Router;
use Encore\Admin\Facades\Admin;
use Illuminate\Support\Facades\Route;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('/user', UserController::class);
    $router->resource('/article', ArticleController::class);
    $router->resource('/country', CountryController::class);
    $router->resource('/photo', PhotoController::class);
    $router->resource('/role', RoleController::class);
    $router->resource('/roleuser', RoleUserController::class);
    $router->resource('/tag', TagController::class);
    $router->resource('/taggable', TaggableController::class);
    $router->resource('/video', VideoController::class);
});
