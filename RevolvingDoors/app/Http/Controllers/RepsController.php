<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Rep;
use App\Location;
use Validator;
use Illuminate\Database\Eloquent\Model;

class RepsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reps = Rep::all();
        $locations = DB::table('locations')->groupBy('state')->join('rep_location', 'locations.id', '=', 'rep_location.location_id')->get();

    
        return view('representative/representative')->with(compact('reps', 'locations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('representative/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), 
        [
            'name' => 'required',
            'description' => 'required',
            'phoneNumber' => 'required',
        ]);

        if (!$validator->fails())
        {
            $rep = Rep::create(['name' => $Request->input('name'), 'description' => $request->input('description')]);

            return redirect('reps');
        }
        else
        {
            return back()->withErrors($validator);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $location = Location::where(['state' => $id])->first();

        $reps = $location->reps;

        return view('representative/findByState')->with(compact('location', 'reps'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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

    public function find(Request $request)
    {
        if ($request->has('state') )
        {
            $location = Location::where(['state' => $request->input('state') ])->first();

            if (empty($location))
            {
                abort(404, 'State not found');
            }
            else
            {
                return redirect('reps/find/state/'. $location->state);
            }
        }
    }
}
