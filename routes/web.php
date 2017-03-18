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

Route::get('/collection_list', function () {
    return view('layouts.collection.collection_list');
});
Route::get('/collection_add', function () {
    return view('layouts.collection.collection_add');
});
Route::get('/additional_add', function() {
	return view('layouts.addition.additional_add');
});
Route::get('/additional_list', function() {
	return view('layouts.addition.additional_list');
});
Route::get('/bazar_list', function(){
	return view('layouts.bazar.bazar_list');
});
Route::get('/bazar_add', function(){
	return view('layouts.bazar.bazar_add');
});
Route::get('/bazar_details_add', function() {
	return view('layouts.bazar.bazar_details_add');
});
Route::get('/bazar_details_list', function() {
	return view('layouts.bazar.bazar_details_list');
});
Route::get('/extra_item_add', function() {
	return view('layouts.extra.extra_item_add');
});
Route::get('/extra_item_list', function() {
	return view('layouts.extra.extra_item_list');
});
Route::get('/meal_add', function() {
	return view('layouts.meal.meal_add');
});
Route::get('/meal_list', function() {
	return view('layouts.meal.meal_list');
});
Route::get('/menu_add', function() {
	return view('layouts.menu.menu_add');
});
Route::get('/menu_list', function() {
	return view('layouts.menu.menu_list');
});
Route::get('/month_add', function() {
	return view('layouts.month.month_add');
});
Route::get('/month_list', function() {
	return view('layouts.month.month_list');
});