<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
    
    public function meal_record(){
        $meal_rate ='0';

        $users = DB::select('SELECT 
        id, name,TotalMeal,TotalCollection 
        FROM users a
        LEFT JOIN  (SELECT user_id, SUM(braekfast+lanch+dinner) as TotalMeal FROM meals GROUP BY user_id) b ON a.id = b.user_id
        LEFT JOIN  (SELECT user_id, SUM(amount) as TotalCollection FROM collections GROUP BY user_id)c ON a.id = c.user_id');
 

        $total_bazar= DB:: table('bazar_details')->sum('amount');
        $total_meal= ceil(DB::table('meals')->sum(DB::raw('braekfast + lanch + dinner')));
        if (!empty($total_meal)){
            $meal_rate= round( $total_bazar/$total_meal, 2);
        }


        $total_extra= ceil(DB::table('additionals')->sum(DB::raw('amount')));
        $total_extra_rate = ceil($total_extra/4);
        $khala = 500;
        
        return view('layouts.record', compact('users','total_bazar','total_meal','meal_rate','total_extra', 'total_extra_rate', 'khala'));
    }
    

    public function info(){
        
    	return view('layouts.allinfo.index');
    }




    public function profile(){
        $user = Auth::user();

        return view('layouts.user.profile', compact('user'));
    }
}
