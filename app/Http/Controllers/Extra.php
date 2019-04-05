<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
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

class Extra extends Controller
{
       private $rules_extra = [
       
       'extra_item' => 'required',
    ];
	
   	
    public function extra_item_add(Request $request){
        
        $extra = !empty($request->id)?
        	ExtraItem::where(['id'=>$request->id])->first()->toArray():
            new ExtraItem();
            //dd($extra);

             if($request->isMethod('post')){
             if($this->save_extra_item($request, $extra)){    
                Flash::success('Succesfully create a new Menu');
                return redirect()->to('/extra_item_list');
            }
         	
        }
        
        return view('layouts.extra.extra_item_add', compact('extra'));
    }
    


    public function save_extra_item(Request $request, $extra_model){
        $validator =Validator::make($request->all(), $this->rules_extra);//dd($validator);
        if($validator->fails()){
             Flash::error(Utilities::errors($validator));           //dd('here');
            return false;            //dd('Flash::error');
        }  else {
            $input = $request->all(); 
            // dd($input);
            if (empty($request->id)) {
                $request->offsetSet('created_at', Carbon::now());
                $extra_item_add = $extra_model->create($request->instance()->all());
            } else {
                $extra = ExtraItem::find($request->id);
                $request->offsetSet('updated_at', Carbon::now());
                $extra->update($request->all());
                Flash::success('Successfully updated a Extra ');
             }
            return true;
        }
    }
    

    public function extra_item_list(){
        $extra_lists = ExtraItem::all();
        
        //dd($extra_list);
        
    	return view('layouts.extra.extra_item_list', ['extra_lists'=>$extra_lists]);
    }
    
    
}
