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



/* ============== Collection 
========================================== */
Route::get('/collection_add/{id}', ['uses' => 'Collection@collection_add']);
Route::get('/collection_add', ['uses' => 'Collection@collection_add']);
Route::post('/collection_add', ['uses' => 'Collection@collection_add']);
Route::get('/collection_list', ['uses' => 'Collection@collection_list']);

/* ============== Additional 
========================================== */
Route::get('/additional_add/{id}', ['uses'=>'Addition@additional_add']);
Route::post('/additional_add', ['uses'=>'Addition@additional_add']);
Route::get('/additional_add', ['uses'=>'Addition@additional_add']);
Route::get('/additional_list', ['uses'=>'Addition@additional_list']);


/* ============== Bazar 
========================================== */
Route::get('/bazar_add/{id}', ['uses'=>'Bazar@bazar_add']);
Route::post('/bazar_add', ['uses'=>'Bazar@bazar_add']);
Route::get('/bazar_add', ['uses'=>'Bazar@bazar_add']);
Route::get('/bazar_list', ['uses'=>'Bazar@bazar_list']);


Route::get('/bazar_details_add/{id}', ['uses'=>'Bazar@bazar_details_add']);
Route::post('/bazar_details_add', ['uses'=>'Bazar@bazar_details_add']);
Route::get('/bazar_details_add', ['uses'=>'Bazar@bazar_details_add']);
Route::get('/bazar_details_list', ['uses'=>'Bazar@bazar_details_list']);


/* ============== Extra Item  
========================================== */
Route::get('/extra_item_add/{id}', ['uses'=> 'Extra@extra_item_add']);
Route::post('/extra_item_add', ['uses'=> 'Extra@extra_item_add']);
Route::get('/extra_item_add', ['uses'=> 'Extra@extra_item_add']);
Route::get('/extra_item_list', ['uses'=> 'Extra@extra_item_list']);


/* ============== Meal 
========================================== */
Route::get('/meal_add/{id}', ['uses'=>'Meal@meal_add']);
Route::post('/meal_add', ['uses'=>'Meal@meal_add']);
Route::get('/meal_add', ['uses'=>'Meal@meal_add']);
Route::get('/meal_list', ['uses'=>'Meal@meal_list']);


/* ============== Menu 
========================================== */
Route::get('/menu_add/{id}', ['uses'=>'Menu@menu_add']);
Route::post('/menu_add', ['uses'=>'Menu@menu_add']);
Route::get('/menu_add', ['uses'=>'Menu@menu_add']);
Route::get('/menu_list', ['uses'=>'Menu@menu_list']);



/* ============== Month 
========================================== */

Route::get('/month_add/{id}', ['uses'=>'Month@month_add']);
Route::post('/month_add', ['uses'=>'Month@month_add']);
Route::get('/month_add', ['uses'=>'Month@month_add']);
Route::get('/month_list', ['uses'=>'Month@month_list']);

