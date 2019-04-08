<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('layouts.app');
});


Auth::routes();

//Route::get('/master', 'HomeController@index');


Route::get('/auth/login', function() {
    return view('auth.login');
});

Route::get('/auth/register', function() {
    return view('auth.register');
});

Route::get('/dashboard', function () {
        return view('layouts.dashboard_content');
    });


Route::resource('/collections', 'CollectionsController');
Route::resource('/additionals', 'AdditionalsController');
Route::resource('/bazars', 'BazarsController');
Route::resource('/bazar_details', 'BazarDetailsController');
Route::resource('/extra_items', 'ExtraItemsController');
Route::resource('/meals', 'MealsController');
Route::resource('/bazar_menus', 'BazarMenusController');
Route::resource('/months', 'MonthsController');
Route::resource('/users', 'UsersController');

Route::get('/user_add', ['uses'=>'UserController@user_add']);


