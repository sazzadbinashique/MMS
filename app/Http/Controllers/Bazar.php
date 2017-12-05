<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BazarModel;
use App\MonthModel;
use App\BazarDetailsModel;
use App\MenuModel;
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

class Bazar extends Controller
{
    private $rules_bazar = [
        'user_id'=>'required',
        'Month_id'=>'required',
        'Expected_date'=>'required',
        
    ];
    
    private $rules_bazar_detail=[
        'user_id' => 'required',
        'Menu_id' => 'required',
        'Amount' => 'required',
        'Date' => 'required',
    ];




    public function bazar_add(Request $request){

    	  $bazar = !empty($request->id)?
              BazarModel::where(['id'=>$request->id])->first()->toArray():
            new BazarModel();
       
        
        if($request->isMethod('post')){
             if($this->save_bazar($request, $bazar)){    
                Flash::success('Succesfully create a new Bazar');
                return redirect()->to('/bazar_list');
            }
        }


    	$user_names = User::pluck('name', 'id');
    	
        $month_names = MonthModel::pluck('Month', 'id');
    	
   		return view('layouts.bazar.bazar_add', compact('bazar','user_names','month_names'));
   	}
        
        
    public function save_bazar(Request $request, $bazar_model){
        $validator =Validator::make($request->all(), $this->rules_bazar);//dd($validator);
        if($validator->fails()){
             Flash::error(Utilities::errors($validator));           //dd('here');
            return false;           // dd('Flash::error');
        }  else {
            $input = $request->all(); 
            // dd($input);
            if (empty($request->id)) {
                $request->offsetSet('created_at', Carbon::now());
                $bazar_add = $bazar_model->create($request->instance()->all());
            } else {
                $bazar= BazarModel::find($request->id);
                $request->offsetSet('updated_at', Carbon::now());
                $bazar->update($request->all());
                Flash::success('Successfully updated a Bazars ');
            }
            return true;
        }
    } 

    public function bazar_list(){
        
        $bazar_lists = BazarModel::all();
        
    	return view('layouts.bazar.bazar_list', ['bazar_lists'=>$bazar_lists] );
    }
    /* ===========================Bazar details 
          ===================================================== */

    public function bazar_details_add(Request $request){
        
        $bazar_detail =!empty($request->id)?
        BazarDetailsModel::where(['id'=>$request->id])->first()->toArray():
            new BazarDetailsModel();
        
        if($request->isMethod('post')){
             if($this->save_bazar_detail($request, $bazar_detail)){    
                Flash::success('Succesfully create a new Bazar');
                return redirect()->to('/bazar_details_list');
            }
        }


    	$user_names = User::pluck('name', 'id');
    	
        $menu_names = \App\MenuModel::pluck('Menu_item', 'id');
        
    	return view('layouts.bazar.bazar_details_add', compact('bazar_detail', 'user_names', 'menu_names'));
    }
    
    public function save_bazar_detail(Request $request, $bazar_detail_model){
        $validator =Validator::make($request->all(), $this->rules_bazar_detail);//dd($validator);
        if($validator->fails()){
             Flash::error(Utilities::errors($validator));           //dd('here');
            return false;           // dd('Flash::error');
        }  else {
            $input = $request->all(); 
            // dd($input);
            if (empty($request->id)) {
                $request->offsetSet('created_at', Carbon::now());
                $bazar_add = $bazar_detail_model->create($request->instance()->all());
            } else {
                $bazar= BazarDetailsModel::find($request->id);
                $request->offsetSet('updated_at', Carbon::now());
                $bazar->update($request->all());
                Flash::success('Successfully updated a Bazars Detail ');
            }
            return true;
        }
    } 
    
    

    public function bazar_details_list(){
        $bazar_details = BazarDetailsModel::all();
    	return view('layouts.bazar.bazar_details_list', ['bazar_details'=>$bazar_details]);
    }  
}
