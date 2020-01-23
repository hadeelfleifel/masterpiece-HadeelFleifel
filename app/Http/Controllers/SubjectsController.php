<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employees;
use App\subjects;
use App\roles;

use App\classes;

use App\schedules;

class SubjectsController extends Controller
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
        $employees=employees::all();
        $subjects=subjects::all();

        return view ('subjects.index',compact('employees','subjects'));
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
        $subjects=subjects::find($id);
        $roles=roles::all();
        $classes=classes::all();
        $employees=employees::all();
        $schedules=schedules::all();
        return view('subjects.show',compact('subjects','employees','classes'));
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
        $employees=employees::all();
        $roles=roles::all();

        $subjects=subjects::find($id);
        return view('subjects.edit',compact('employees','subjects','roles'));
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
        $subjects=subjects::find($id);

        $subjects->subjectName=$request->subjectName;
        $subjects->creditHours=$request->creditHours;
        $subjects->TimesperWeek=$request->TimesperWeek;
        $subjects->employee_id=$request->employee_id;

        $subjects->save();
        return redirect()->route('subjects');
    }


    
    public function destroy($id)
    {
        //
    }
}
