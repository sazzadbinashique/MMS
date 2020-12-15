<?php

namespace App\Http\Controllers;

use App\BazarDetail;
use App\Collection;
use App\Meal;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        $total_collection= Collection::count();
        $total_user= User::count();
        $total_bazar_detail= BazarDetail::count();
        $total_meal=Meal::count();


        return view('layouts.dashboard', compact('total_user', 'total_collection', 'total_bazar_detail', 'total_meal'));
    }
}
