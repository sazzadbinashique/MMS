<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\CollectionModel;


class Collection extends Controller
{

    public function collection_add(Request $request){

$department = new Collection;           
// Another Way to insert records
$department->create($request->all());

return redirect('/collection_add');


   		//return view('layouts.collection.collection_add');
   	}

   	public function collection_list(){
   		return view('layouts.collection.collection_list');
   	}
}
