<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\MenuModel;
use \Carbon\Carbon;
use Validator;
use View;
use Flash;
use Utilities;
use Redirect;
use DB;
use Cache;
use Session;

class Menu extends Controller
{
        private $rules_menu = [
       
       'menu_item' => 'required',
    ];
    
	
   	
    public function menu_add(Request $request){

    	$menu = !empty($request->id)?
        	MenuModel::where(['id'=>$request->id])->first()->toArray():
            new MenuModel();
            //dd($menu);

             if($request->isMethod('post')){
             if($this->save_menu($request, $menu)){    
                Flash::success('Succesfully create a new Menu');
                return redirect()->to('/menu_list');
            }

        }


    	return view('layouts.menu.menu_add', compact('menu'));
    }

    public function save_menu(Request $request, $menu_model){
        $validator =Validator::make($request->all(), $this->rules_menu);//dd($validator);
        if($validator->fails()){
             Flash::error(Utilities::errors($validator));           //dd('here');
            return false;            dd('Flash::error');
        }  else {
            $input = $request->all(); 
            // dd($input);
            if (empty($request->id)) {
                $request->offsetSet('created_at', Carbon::now());
                $menu_add = $menu_model->create($request->instance()->all());
            } else {
                $menu = MenuModel::find($request->id);
                $request->offsetSet('updated_at', Carbon::now());
                $menu->update($request->all());
                Flash::success('Successfully updated a menu ');
             }
            return true;
        }
    }


    public function menu_list(){
        $menu_lists = MenuModel::all();


    	return view('layouts.menu.menu_list',['menu_lists'=>$menu_lists]);
    }
}
