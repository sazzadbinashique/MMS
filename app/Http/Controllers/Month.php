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
	  
      private $rules_month = [
       
       'Month' => 'required',
//       'Year' => 'required',
    ];
    
    
    
    public function month_add(Request $request){
        $month = !empty($request->id)?
           MonthModel::where(['id'=>$request->id])->first()->toArray():
            new MonthModel();
            //dd($month);

             if($request->isMethod('post')){
             if($this->save_menu($request, $month)){    
                Flash::success('Succesfully create a new Menu');
                return redirect()->to('/month_list');
            }
        }
    	return view('layouts.month.month_add',compact('month'));
    }

    
    public function save_menu(Request $request, $month_model){
        $validator =Validator::make($request->all(), $this->rules_month);//dd($validator);
        if($validator->fails()){
             Flash::error(Utilities::errors($validator));           //dd('here');
            return false;          //  dd('Flash::error');
        }  else {
            $input = $request->all(); 
             //dd($input);
            if (empty($request->id)) {
                $request->offsetSet('created_at', Carbon::now());
                $month_add = $month_model->create($request->instance()->all());
            } else {
                $month = MonthModel::find($request->id);
                $request->offsetSet('updated_at', Carbon::now());
                $month->update($request->all());
                Flash::success('Successfully updated a Month');
             }
            return true;
        }
    }

    
    
    public function month_list(){
        
        $month_lists = MonthModel::all();
        
        dd($month_lists);
        
    	return view('layouts.month.month_list',['month_lists'=>$month_lists]);
    }
    
   
}
