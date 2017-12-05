<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MealModel;
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

class Meal extends Controller
{
    private $rules_meal=[
      'user_id'=>'required',  
      'Braekfast'=>'required',  
      'Lanch'=>'required',  
      'Dinner'=>'required',  
      'date'=>'required',  
    ];



    public function meal_add(Request $request){

    	  $meal = !empty($request->id)?
                MealModel::where(['id'=>$request->id])->first()->toArray():
            new MealModel();
        
       // dd($additional);
        
        if($request->isMethod('post')){
             if($this->save_meal($request, $meal)){    
                Flash::success('Succesfully create a new meal');
                return redirect()->to('/meal_list');
            }
        }


    	$user_names = User::pluck('name', 'id');
    	
   		return view('layouts.meal.meal_add', compact('meal','user_names'));
   	}
        
        
    public function save_meal(Request $request, $meal_model){
        $validator =Validator::make($request->all(), $this->rules_meal);//dd($validator);
        if($validator->fails()){
             Flash::error(Utilities::errors($validator));           //dd('here');
            return false;           // dd('Flash::error');
        }  else {
            $input = $request->all(); 
            // dd($input);
            if (empty($request->id)) {
                $request->offsetSet('created_at', Carbon::now());
                $meal_add = $meal_model->create($request->instance()->all());
            } else {
                $meal = MealModel::find($request->id);
                $request->offsetSet('updated_at', Carbon::now());
                $meal->update($request->all());
                Flash::success('Successfully updated a meal ');
            }
            return true;
        }
    }    

    public function meal_list(){
        
        $meal_lists = MealModel::all();
        
    	return view('layouts.meal.meal_list', ['meal_lists'=>$meal_lists] );
    }  
}
