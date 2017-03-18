<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Addition extends Controller
{
	public function mess(){
   	return view('layouts.master.layout');
  }
   	
  public function additional_add(){
    return view('layouts.addition.additional_add');
  }

  public function additional_list(){
    return view('layouts.addition.additional_list');
  }
}
