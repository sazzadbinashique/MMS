<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateMealRequest;
use Illuminate\Http\Request;
use App\Http\Requests\CreateMealRequest;
use App\Meal;
use App\User;
use Flash;
use Illuminate\Support\Facades\Input;
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
        $meals = Meal::orderBy('id', 'desc')->paginate(10);


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
        $date_exits = Meal::where([['user_id', '=',Input::get('user_id')],['date', '=', Input::get('date')]])->first();
        if ($date_exits === null) {
            Meal::create($input);
            Flash::success('Meal has been Created Succesfully');

            return redirect('/meals');
        }

        Flash::success('Already Date has been Created Succesfully');

        return redirect()->back();
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
    public function update(UpdateMealRequest $request, $id)
    {
        $meal= Meal::findOrFail($id);
        $input=$request->all();
        $date_exits = Meal::where([['user_id', '=',Input::get('user_id')],['date', '=', Input::get('date')]])->first();
        if ($date_exits === null) {
            $meal->update($input);
            Flash::success('Meal has been Updated Succesfully');

            return redirect('/meals');
        }


        Flash::success('Already User date has been Created Succesfully');

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
