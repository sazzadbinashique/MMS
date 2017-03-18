<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Month extends Controller
{
	public function mess(){
   		return view('layouts.master.layout');
    }
    
    public function month_add(){
    	return view('layouts.month.month_add');
    }

    public function month_list(){
    	return view('layouts.month.month_list');
    }
}
