<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Month;

class MonthsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $months = Month::all();

        return view('layouts.month.index', compact('months'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('layouts.month.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateMonthRequest $request)
    {
        $input=$request->all();
        Month::create($input);

        Flash::success('Month has been Create Successfully');
        return redirect('/months');
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
        $month = Month::findOrFail($id);

        return view('layouts.month.edit', compact('month'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateMonthRequest $request, $id)
    {
        $month = Month::findOrFail($id);
        $input =$request->all();
        Month::update($input);

        Flash::success('Month has been Updated Successfully');
        return redirect('/months');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $month = Month::findOrFail($id)->delete();

        Flash::error('Month Has been Deleted Successfully'); 

        return redirect('/months');

    }
}
