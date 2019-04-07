<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateMealRequest;
use App\Meal;
use App\User;
use Flash;
use Session;

class MealsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meals = Meal::all();


        return view('layouts.meal.index', compact('meals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::pluck('name', 'id');

        return view('layouts.meal.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateMealRequest $request)
    {
        $input = $request->all();

        Meal::create($input);

        Flash::success('Meal has been Created Succesfully');

        return redirect('/meals');
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
        $meal = Meal::findOrFail($id);
        $users = User::pluck('name', 'id');

        return view('layouts.meal.edit', compact('meal', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateMealRequest $request, $id)
    {
        $meal= Meal::findOrFail($id);
        $input=$request->all();
        $meal->update($input);

        Flash::success('Meal has been Updated Succesfully');

        return redirect('/meals');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $meal= Meal::findOrFail($id)->delete();

        Flash::error('Meal has been Deleted Succesfully');
        return redirect('/meals');
    }
}
