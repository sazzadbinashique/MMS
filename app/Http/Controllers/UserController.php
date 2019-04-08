<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\User;
use App\Meal;
use App\BazarDetail;
use App\Month;
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
             
        $users = DB::select('SELECT 
        id, name,TotalMeal,TotalCollection 
        FROM users a
        LEFT JOIN  (SELECT user_id, SUM(braekfast+lanch+dinner) as TotalMeal FROM meals GROUP BY user_id) b ON a.id = b.user_id
        LEFT JOIN  (SELECT user_id, SUM(amount) as TotalCollection FROM collections GROUP BY user_id)c ON a.id = c.user_id');
 

        $total_bazar= DB:: table('bazar_details')->sum('amount');
        $total_meal= ceil(DB::table('meals')->sum(DB::raw('braekfast + lanch + dinner')));
        $meal_rate= round( $total_bazar/$total_meal, 2);

        $total_extra= ceil(DB::table('additionals')->sum(DB::raw('amount')));
        $total_extra_rate = ceil($total_extra/8);
        $khala = 450;
        
        return view('layouts.user.user_add', compact('users','total_bazar','total_meal','meal_rate','total_extra', 'total_extra_rate', 'khala'));
    }
    

    public function user_list(){
        
        $user_lists = User::all();
        
    	return view('layouts.user.user_list',['user_lists'=>$user_lists]);
    }




    public function index(){

        return view('layouts.allinfo.index');
    }
}
