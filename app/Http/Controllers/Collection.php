<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Collection extends Controller
{
    public function collection_add(){
    	return view('layouts.collection.collection_add');
    }

    public function collection_list(){
    	return view('layouts.collection.collection_list');
    }

}
