<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\CreateExtraItemRequest;
use App\ExtraItem;
use Flash;

class ExtraItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $extraitems = ExtraItem::all();

        return view('layouts.extra.index', compact('extraitems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('layouts.extra.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateExtraItemRequest $request)
    {
        $input = $request->all();
        ExtraItem::create($input);

        Flash::success('ExtraItem has been Created successfully');
        return redirect()->back('extra_items.index');
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
        $extraitem = ExtraItem::findOrFail($id);


        return view('layouts.extra.edit', compact('extraitem'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateExtraItemRequest $request, $id)
    {
        $extraitem = ExtraItem::findOrFail($id);

        $input=$request->all();
        $extraitem->update($input);

        Flash::success('ExtraItem has been Updated successfully');

        return redirect()->back('extra_items.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $extraitem = ExtraItem::findOrFail($id)->delete();

        Flash::error('ExtraItem Has Been Deleted successfully');

        return redirect()->back();


    }
}
