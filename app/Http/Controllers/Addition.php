<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdditionalModel;
use App\ExtraItemModel;
use \Carbon\Carbon;
use Validator;
use View;
use Flash;
use Utilities;
use Redirect;
use DB;
use Cache;
use Session;

class Addition extends Controller
{
	
    public function additional_add(Request $request){

    	  $additional = !empty($request->id)?
                AdditionalModel::where(['id'=>$request->id])->first()->toArray():
            new AdditionalModel();
        
       // dd($additional);
        
        if($request->isMethod('post')){
             if($this->save_additional($request, $additional)){    
                Flash::success('Succesfully create a new Collection');
                return redirect()->to('/additional_list');
            }
        }


    	$extra_item_names = ExtraItemModel::pluck('extra_item', 'id');
    	
   		return view('layouts.addition.additional_add', compact('additional','extra_item_names'));
   	}
       

  public function additional_list(){
       $additional_lists = AdditionalModel::all();
        
    	return view('layouts.addition.additional_list', ['additional_lists'=>$additional_lists]);
  }
}
