<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\CollectionModel;
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


class Collection extends Controller
{

	private $rules_collection = [
       'user_id' => 'required',
       'date' => 'required',
       'amount' => 'required',
    ];
    

    public function collection_add(Request $request){

    	  $collection = !empty($request->id)?
        	CollectionModel::where(['id'=>$request->id])->first()->toArray():
            new CollectionModel();
        
        
        
        if($request->isMethod('post')){
             if($this->save_collection($request, $collection)){    
                Flash::success('Succesfully create a new Collection');
                return redirect()->to('/collection_add');
            }
        }


    	$member_names = User::pluck('name', 'id');
    	
    	//$collection = $request->all();
   

   		return view('layouts.collection.collection_add', compact('collection','member_names'));
   	}


   	  public function save_collection(Request $request, $collection_model){
        $validator =Validator::make($request->all(), $this->rules_collection);//dd($validator);
        if($validator->fails()){
             Flash::error(Utilities::errors($validator));           //dd('here');
            return false;           // dd('Flash::error');
        }  else {
            $input = $request->all(); 
            //dd($input);
            if (empty($request->id)) {
                $request->offsetSet('created_at', Carbon::now());
                $collection_add = $collection_model->create($request->instance()->all());
            } else {
                $collection = CollectionModel::find($request->id);
                $request->offsetSet('updated_at', Carbon::now());
                $collection->update($request->all());
                Flash::success('Successfully updated a collction ');
            }
            return true;
        }
    }

   	

   	public function collection_list(){

      $collection_lists = DB::table('Collection')->get();
      // dd($collection_lists);
      $member_names = User::pluck('name', 'id');

      // dd($user_names);
   		return view('layouts.collection.collection_list', ['collection_lists'=>$collection_lists, 'member_names'=>
        $member_names]);
   	}
}
