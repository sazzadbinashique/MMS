<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\User;
use App\MealModel;
use App\BazarDetailsModel;
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

        $total_bazar= DB:: table('Bazar_details')->sum('Amount');
        $total_meal= ceil(DB::table('Meal')->sum(DB::raw('Braekfast + Lanch + Dinner')));
        $meal_rate= round( $total_bazar/$total_meal, 2);
        $person_total_meal= DB::table('Meal')->where('user_id', 1)->sum(DB::raw('Braekfast + Lanch + Dinner'));

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
