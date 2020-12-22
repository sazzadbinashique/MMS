<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BazarMenu;
use Carbon\Carbon;
use Session;
use Flash;
use App\Http\Requests\CreateBazarMenuRequest;



class BazarMenusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bazar_menus = BazarMenu::all();

        return view('layouts.bazarmenu.index', compact('bazar_menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('layouts.bazarmenu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateBazarMenuRequest $request)
    {
        $input=$request->all();
        BazarMenu::create($input);

        Flash::success('The BazarMenu has been Created Successfully');
        return redirect()->route('bazar_menus.index');
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
        $bazar_menu = BazarMenu::findOrFail($id);

        return view('layouts.bazarmenu.edit', compact('bazar_menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateBazarMenuRequest $request, $id)
    {
        $bazarmenu = BazarMenu::findOrFail($id);
        $input=$request->all();
        $bazarmenu->update($input);

        Flash::success('The BazarMenu has been Updated Successfully');

        return redirect()->route('bazar_menus.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bazarmenu = BazarMenu::findOrFail($id)->delete();

        
        Flash::success('The BazarMenu has been Deleted Successfully');

        return redirect()->back();
    }
}
