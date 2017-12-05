<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\MonthModel;
use \Carbon\Carbon;
use Validator;
use View;
use Flash;
use Utilities;
use Redirect;
use DB;
use Cache;
use Session;

class Month extends Controller
{
	    
    public function month_add(){
    	return view('layouts.month.month_add');
    }

    public function month_list(){
        
        $month_lists = MonthModel::all();
        
    	return view('layouts.month.month_list',['month_lists'=>$month_lists]);
    }
}
