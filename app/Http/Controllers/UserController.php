<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\User;
use App\Meal;
use App\BazarDetail;
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
    
    public function user_add(){
        
        $users = User::where('id', 1)->get();
        // $users = User::all();

        $total_bazar= DB:: table('bazar_details')->sum('amount');
        $total_meal= ceil(DB::table('meals')->sum(DB::raw('braekfast + lanch + dinner')));
        $meal_rate= round( $total_bazar/$total_meal, 2);
        $person_total_meal= DB::table('meals')->where('user_id', 1)->sum(DB::raw('braekfast + lanch + dinner'));

        $total_cost= $person_total_meal * $meal_rate;
        
        return view('layouts.user.user_add', compact('users','total_bazar','total_meal','meal_rate','person_total_meal', 'total_cost'));
    }
    

    public function user_list(){
        
        $user_lists = User::all();
        
    	return view('layouts.user.user_list',['user_lists'=>$user_lists]);
    }




    public function index(){

        return view('layouts.allinfo.index');
    }
}
