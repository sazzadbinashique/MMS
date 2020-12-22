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

Route::get('/', ['uses'=>'FrontendController@index']);

Auth::routes();

Route::get('/auth/login', function() {
    return view('auth.login');
});
Route::get('/auth/register', function() {
    return view('auth.register');
});

Route::group(['prefix' => 'admin', 'middleware' =>[ 'auth', 'admin']], function () {

    Route::get('/dashboard', ['uses'=>'DashboardController@index'])->name('dashboard.index');

    Route::resource('/collections', 'CollectionsController');
    Route::resource('/additionals', 'AdditionalsController');
    Route::resource('/bazars', 'BazarsController');
    Route::resource('/bazar_details', 'BazarDetailsController');
    Route::resource('/extra_items', 'ExtraItemsController');
    Route::resource('/meals', 'MealsController');
    Route::resource('/bazar_menus', 'BazarMenusController');
    Route::resource('/months', 'MonthsController');
    Route::resource('/users', 'UsersController');

    Route::get('/profile', ['uses'=>'UserController@profile'])->name('profile');
    Route::get('/meal/record', ['uses'=>'UserController@meal_record'])->name('meal.record');
    Route::get('/allinfo', ['uses'=>'UserController@info'])->name('all.info');
});
Route::group(['prefix' => 'user', 'middleware' =>[ 'auth', 'user']], function () {

    Route::get('/dashboard', ['uses'=>'DashboardController@index'])->name('dashboard');

    Route::get('/user/profile', ['uses'=>'UserController@profile'])->name('user/profile');
    Route::get('/meal/record', ['uses'=>'UserController@meal_record'])->name('meal.record');
    Route::get('/allinfo', ['uses'=>'UserController@info'])->name('all.info');
});





