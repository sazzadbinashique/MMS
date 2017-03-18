<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Bazar extends Controller
{
    public function mess(){
        return view('layouts.master.layout');
    }
    public function bazar_add(){
    	return view('layouts.bazar.bazar_add');
    }

    public function bazar_list(){
    	return view('layouts.bazar.bazar_list');
    }

    public function bazar_details_add(){
    	return view('layouts.bazar_details.bazar_details_add');
    }

    public function bazar_details_list(){
    	return view('layouts.bazar_details.bazar_details_list');
    }  
}
