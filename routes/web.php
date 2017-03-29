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
    return view('layouts.master.layout');
});


/* ============== Collection 
========================================== */
Route::post('/collection_add/{id}', ['uses' => 'Collection@collection_add']);
Route::post('/collection_add', ['uses' => 'Collection@collection_add']);
Route::get('/collection_add', ['uses' => 'Collection@collection_add']);
Route::get('/collection_list', ['uses' => 'Collection@collection_list']);

/* ============== Additional 
========================================== */
Route::get('/additional_list', ['uses'=>'Addition@additional_list']);
Route::get('/additional_add', ['uses'=>'Addition@additional_add']);


/* ============== Bazar 
========================================== */
Route::get('/bazar_list', ['uses'=>'Bazar@bazar_list']);
Route::get('/bazar_add', ['uses'=>'Bazar@bazar_add']);
Route::get('/bazar_details_list', ['uses'=>'Bazar@bazar_details_list']);
Route::get('/bazar_details_add', ['uses'=>'Bazar@bazar_details_add']);


/* ============== Extra Item  
========================================== */
Route::get('/extra_item_list', ['uses'=> 'Extra@extra_item_list']);
Route::get('/extra_item_add', ['uses'=> 'Extra@extra_item_add']);


/* ============== Meal 
========================================== */
Route::get('/meal_list', ['uses'=>'Meal@meal_list']);
Route::get('/meal_add', ['uses'=>'Meal@meal_add']);


/* ============== Menu 
========================================== */
Route::get('/menu_list', ['uses'=>'Menu@menu_list']);
Route::get('/menu_add', ['uses'=>'Menu@menu_add']);


/* ============== Month 
========================================== */

Route::get('/month_list', ['uses'=>'Month@month_list']);
Route::get('/month_add', ['uses'=>'Month@month_add']);