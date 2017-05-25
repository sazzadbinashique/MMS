<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
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

class Extra extends Controller
{
	
   	
    public function extra_item_add(){
        
    	return view('layouts.extra.extra_item_add');
    }
    
    public function extra_item_store(Request $request){
        // validate
        $rules = array(
            'extra_item'=> 'required'
        );
        $validator = Validator::make($request::all(), $rules);
        //dd(here);
        // process the login
        if ($validator->fails()) {
            return Redirect::to('/extra_item_add')
                ->withErrors($validator)
                ->withInput(Input::except('extra_item'));
        } else {
            // store
            $extra_store = new ExtraItemModel;
            $extra_store->extra_item= Input::get('extra_item');
            $extra_store->save();
            //dd($extra_store);

            // redirect
            Session::flash('message', 'Successfully created Extra _item!');
            return Redirect::to('/extra_item_add');
        }
    }
    
    public function extra_item_edit($id){
        // get the nerd
        $extra_item_show = ExtraItemModel::find($id);
        //dd($extra_item_show);
        // show the view and pass the nerd to it
        return view('layouts.extra.extra_item_add');
    }
     public function extra_item_update(){
        
    }
    

    public function extra_item_list(){
        $extra_lists = ExtraItemModel::all();
        
        //dd($extra_list);
        
    	return view('layouts.extra.extra_item_list', ['extra_lists'=>$extra_lists]);
    }
    
    public function extra_item_delete(){
        
    }
}
