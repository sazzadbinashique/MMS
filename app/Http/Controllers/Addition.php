<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Additional;
use App\ExtraItem;
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
    	private $rules_additional = [
       'extra_item_id' => 'required',
       'date' => 'required',
       'extra_amount' => 'required',
    ];
	
    public function additional_add(Request $request){

    	  $additional = !empty($request->id)?
                Additional::where(['id'=>$request->id])->first()->toArray():
            new Additional();
        
       // dd($additional);
        
        if($request->isMethod('post')){
             if($this->save_additional($request, $additional)){    
                Flash::success('Succesfully create a new Collection');
                return redirect()->to('/additional_list');
            }
        }


    	$extra_item_names = ExtraItem::pluck('extra_item', 'id');
    	
   		return view('layouts.addition.additional_add', compact('additional','extra_item_names'));
   	}
        
        
      public function save_additional(Request $request, $additional_model){
        $validator =Validator::make($request->all(), $this->rules_additional);//dd($validator);
        if($validator->fails()){
             Flash::error(Utilities::errors($validator));           //dd('here');
            return false;           // dd('Flash::error');
        }  else {
            $input = $request->all(); 
            // dd($input);
            if (empty($request->id)) {
                $request->offsetSet('created_at', Carbon::now());
                $additional_add = $additional_model->create($request->instance()->all());
            } else {
                $additional = Additional::find($request->id);
                $request->offsetSet('updated_at', Carbon::now());
                $additional->update($request->all());
                Flash::success('Successfully updated a Additional ');
            }
            return true;
        }
    }
    
  public function additional_list(){
       $additional_lists = Additional::all();
        
    	return view('layouts.addition.additional_list', ['additional_lists'=>$additional_lists]);
  }
}
