<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Meal extends Controller
{
	public function mess(){
   		return view('layouts.master.layout');
   	}

    public function meal_add(){
    	return view('layouts.meal.meal_add');
    }

    public function meal_list(){
    	return view('layouts.meal.meal_list');
    }  
}
