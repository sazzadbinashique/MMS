<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Menu extends Controller
{
	
   	
    public function menu_add(){
    	return view('layouts.menu.menu_add');
    }

    public function menu_list(){
    	return view('layouts.menu.menu_list');
    }
}
