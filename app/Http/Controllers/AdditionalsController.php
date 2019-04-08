<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateAdditionalRequest;
use App\Additional;
use App\ExtraItem;
use Flash;


class AdditionalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $additionals= Additional::all();

        return view('layouts.addition.index', compact('additionals'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $extra_items = ExtraItem::pluck('extra_item', 'id');

        return view('layouts.addition.create', compact('extra_items'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateAdditionalRequest $request)
    {
        $input = $request->all();
        // dd($input);

        Additional::create($input);
        // dd($input);

        Flash::success('Additional has been Created Successfully');
        return redirect('/additionals');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $additional = Additional::findOrFail($id);
        $extra_items = ExtraItem::pluck('extra_item', 'id');

        return view('layouts.addition.edit', compact('additional', 'extra_items'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateAdditionalRequest $request, $id)
    {
        $additional = Additional::findOrFail($id);
        $input = $request->all();
        $additional->update($input);

        Flash::success('Additional has been Updated Successfully'); 
        return redirect('/additionals');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $additional = Additional::findOrFail($id)->delete();
        Flash::error('Additional has been Deleted Successfully');
        return redirect('/additionals');
    }
}
