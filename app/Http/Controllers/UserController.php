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
        
        $user_lists = User::all();
//        $user_lists = User::where('id', 3 )->first();
//        $user_lists = User::findOrFail(3);

        
//        dd($user_lists);
        
        $total_bazar= DB:: table('Bazar_details')->sum('Amount');
        
        $total_meal1= DB:: table('Meal')->sum('Braekfast');
        $total_meal2= DB:: table('Meal')->sum('Lanch');
        $total_meal3= DB:: table('Meal')->sum('Dinner');
        
        $total_meal= ceil($total_meal1 + $total_meal2 + $total_meal3);
        
        $meal_rate= round( $total_bazar/$total_meal, 2);
        
        
        
        $individual_total_meal= MealModel::where('id', 3)
                ->value(DB::raw("SUM(Braekfast + Lanch + Dinner)"));
        
        $khorochs= $individual_total_meal * $meal_rate;
        
//        echo $khoroch;
        
//        dd($individual_total_meal);
        
//        dd($meal_rate);
        
//        dd($total_meal);
        
        
//        dd($users);
        
        
        return view('layouts.user.user_add', compact('user_lists','total_bazar','total_meal1','total_meal2','total_meal3','total_meal','meal_rate','individual_total_meal', 'khorochs'));
    }
    
    
    
   

    

    public function user_list(){
        
        $user_lists = User::all();
        
//        dd($user_lists);
        
    	return view('layouts.user.user_list',['user_lists'=>$user_lists]);
    }
}
