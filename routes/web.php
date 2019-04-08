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
        return view('layouts.master.layout');
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



// Route::get('/user_add/{id}', ['uses'=>'UserController@user_add']);
// Route::post('/user_add', ['uses'=>'UserController@user_add']);
Route::get('/user_add', ['uses'=>'UserController@user_add']);
// Route::get('/user_list', ['uses'=>'UserController@user_list']);
// Route::get('/allinfo', ['uses'=>'UserController@index']);
// Route::get('/allinfo/{id}', ['uses'=>'UserController@index'])->name('allinfo.edit');

