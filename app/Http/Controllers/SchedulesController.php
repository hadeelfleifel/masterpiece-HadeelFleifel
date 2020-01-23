<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employees;
use App\roles;
use App\classes;
use App\subjects;
use App\schedules;

class SchedulesController extends Controller
{
    //
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function create()
    {
        //
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
        $roles=roles::all();
        $classes=classes::all();
        $subjects=subjects::all();

        // $schedules=schedules::find($id);
        $schedules=schedules::all()->where('class_id', $id);
        // $schedules=schedules::all();
        // $schedules=$id;
        return view('schedules.show',compact('subjects','schedules','classes'));
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


    
    public function destroy($id)
    {
        //
    }
}
