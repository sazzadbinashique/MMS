<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\User;
use \Carbon\Carbon;
use Validator;
use View;
use Flash;
use Utilities;
use Redirect;
use DB;
use Cache;
use Session;

class UserController extends Controller
{
    
    
    
       public function user_list(){
        
        $user_lists = User::all();
        
        dd($user_lists);
        
    	return view('layouts.user.user_list',['user_lists'=>$user_lists]);
    }
}
