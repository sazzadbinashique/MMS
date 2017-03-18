<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Extra extends Controller
{
	public function mess(){
   		return view('layouts.master.layout');
   	}
   	
    public function extra_item_add(){
    	return view('layouts.extra.extra_item_add');
    }

    public function extra_item_list(){
    	return view('layouts.extra.extra_item_list');
    }
}
