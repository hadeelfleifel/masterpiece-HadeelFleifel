<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employees;
use App\classes;
use App\roles;

class ClassesController extends Controller
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
        $classes=classes::all();
        $employees=employees::all();

        return view ('classes.index',compact('classes','employees'));

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

        $classes=classes::find($id);
        return view('classes.edit',compact('employees','classes','roles'));
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
        $class=classes::find($id);

        $class->className=$request->className;
        $class->classGrade=$request->classGrade;
        $class->ClassFloor=$request->ClassFloor;
        $class->StudentsNumber=$request->StudentsNumber;
        $class->employee_id=$request->employee_id;

        $class->save();
        return redirect()->route('classes');
    }


    
    public function destroy($id)
    {
        //
    }
}
