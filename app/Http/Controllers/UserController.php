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
        
        // $users = User::where('id', 1)->get();
        // $users = User::all();
        
   // $users= User::query()->select(['id','name', ])
   //  ->withCount([
   //      'meals as total_meals' => function ($query) {
   //          $query->select(DB::raw('SUM(breakfast + dinner + lunch)'));
   //      },
   //      'collections as total_collections' => function ($query) {
   //          $query->select(DB::raw('SUM(amount)'));
   //      },
   //  ])
   //  ->get();

 
        $users = User::selectRaw('sum(meals.braekfast+dinner+lanch) AS TotalMeal')
        ->leftjoin('meals', 'users.id', '=', 'meals.user_id')
        ->groupBy('user_id')
        ->get(['id', 'name']);
        

            return $users;









// left join two table and sum 
        /*
        SELECT id,name,user_id , TotalInMeal  FROM `users` a LEFT JOIN (SELECT user_id, SUM( braekfast + lanch + dinner)  as TotalInMeal FROM meals GROUP BY user_id ) b on a.id = b.user_id
        */


 // three table left join
        /*

        SELECT 
        id, name,TotalMeal,TotalCollection 
        FROM users a
        LEFT JOIN  (SELECT user_id, SUM(dinner) as TotalMeal FROM meals GROUP BY user_id) b ON a.id = b.user_id
        LEFT JOIN  (SELECT user_id, SUM(amount) as TotalCollection FROM collections GROUP BY user_id)c ON a.id = c.user_id

        */



// left join 

/*

        SELECT 
    users.id ID,
  users.name Name,  
   SUM(meals.braekfast+dinner+lanch) TotalMeal,  
  SUM(collections.amount) TotalAmount
FROM users
LEFT JOIN meals ON meals.id = users.id
LEFT JOIN collections ON collections.id = users.id

*/
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
