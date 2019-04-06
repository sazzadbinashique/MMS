<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bazar;
use App\User;
use App\Month;

class BazarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bazars = Bazar::all();

        return view('layouts.bazar.index', compact('bazars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::pluck('name', 'id');
        $months = Month::pluck('month', 'id');

        return view('layouts.bazar.create', compact('users', 'months'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        Bazar::create($input);

        Flash::success('Bazar has been Created Successfully'); 
        return redirect('/bazars'); 
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
        $bazar = Bazar::findOrFail($id);
        $users = User::pluck('name', 'id');
        $months = Month::pluck('month', 'id');

        return view('layouts.bazar.edit', compact('bazar','users', 'months'));    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateBazarsRequest $request, $id)
    {
        $bazar = Bazar::findOrFail($id);
        $input = $request->all();
        $bazar->update($input); 

        Flash::success('Bazars has been Updated Successfully'); 
        return redirect('/bazars');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $bazar = Bazar::findOrFail($id)->delete();

       Flash::error('Bazar has been Deleted Successfully');
       return redirect('/bazars'); 

    }
}
