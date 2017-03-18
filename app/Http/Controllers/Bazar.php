<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Bazar extends Controller
{
    
    public function bazar_add(){
    	return view('layouts.bazar.bazar_add');
    }

    public function bazar_list(){
    	return view('layouts.bazar.bazar_list');
    }

    public function bazar_details_add(){
    	return view('layouts.bazar.bazar_details_add');
    }

    public function bazar_details_list(){
    	return view('layouts.bazar.bazar_details_list');
    }  
}
