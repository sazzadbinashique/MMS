<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\BazarDetail;
use App\BazarMenu;

class BazarDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bazar_details = BazarDetail::all();

        return view('layouts.bazardetail.index', compact('bazar_details'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::pluck('name', 'id');
        
        $bazar_menus = BazarMenu::pluck('menu_item', 'id');

        //
        return view('layouts.bazardetail.create', compact('users', 'bazar_menus'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bazar_detail= BazarDetail::findOrFail($id);        
        $users = User::pluck('name', 'id');
        
        $bazar_menus = BazarMenu::pluck('menu_item', 'id');


         return view('layouts.bazardetail.edit', compact('bazar_detail', 'users', 'bazar_menus'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}