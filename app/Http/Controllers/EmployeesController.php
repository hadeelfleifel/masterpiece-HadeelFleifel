<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\employees;
use App\roles;
class EmployeesController extends Controller
{
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
        $roles=roles::all();
        $employees=employees::all();

        return view ('employees.index',compact('employees','roles'));
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function create()
    {
        //
        $roles=roles::all();
        $employees=employees::all();
        return view ('employees.add',compact('roles','employees'));
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
        $this->validate($request,[
            "Fname" => "required",
            "Sname" => "required",
            "Tname" => "required",
            "Lname" => "required",
            "DofB" => "",
            "JoinDate" => "",
            "Nationality" => "required",
            "SSN" => "required",
            "Gender" => "required",
            "Martial" => "required",
            "Address" => "required",
            "Email" => "",
            "Phone" => "required",
            "AcademicDegree" => "required",
            "EduMajour" => "",
            "GraduateYear" => "",
            "Salary" => "",
            "Perks" => "",
            "roles_id"=>"required",
            "uploaded" => ""

        ]);

        
        $employees=new employees;

        $employees->Fname=$request->Fname;
        $employees->Sname=$request->Sname;
        $employees->Tname=$request->Tname;
        $employees->Lname=$request->Lname;
        $employees->DofB=$request->DofB;
        $employees->JoinDate=$request->JoinDate;
        $employees->Nationality=$request->Nationality;
        $employees->SSN=$request->SSN;
        $employees->Gender=$request->Gender;
        $employees->Martial=$request->Martial;
        $employees->Address=$request->Address;
        $employees->Email=$request->Email;
        $employees->Phone=$request->Phone;
        $employees->AcademicDegree=$request->AcademicDegree;
        $employees->EduMajour=$request->EduMajour;
        $employees->GraduateYear=$request->GraduateYear;
        $employees->roles_id=$request->roles_id;
        $employees->Salary=$request->Salary;
        $employees->Perks=$request->Perks;

        $employees->save();
       return redirect()->route('employees');

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
        $emp=employees::find($id);
        $roles=roles::all();

        return view('employees.show',compact('emp','roles'));
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
        $roles=roles::all();

        $emp=employees::find($id);
        return view('employees.edit',compact('emp','roles'));
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
        $emp=employees::find($id);

        $emp->Fname=$request->Fname;
        $emp->Sname=$request->Sname;
        $emp->Tname=$request->Tname;
        $emp->Lname=$request->Lname;
        $emp->DofB=$request->DofB;
        $emp->JoinDate=$request->JoinDate;
        $emp->Nationality=$request->Nationality;
        $emp->SSN=$request->SSN;
        $emp->Gender=$request->Gender;
        $emp->Martial=$request->Martial;
        $emp->Address=$request->Address;
        $emp->Email=$request->Email;
        $emp->Phone=$request->Phone;
        $emp->AcademicDegree=$request->AcademicDegree;
        $emp->EduMajour=$request->EduMajour;
        $emp->GraduateYear=$request->GraduateYear;
        // $emp->Roles=$request->Roles;

        $emp->Salary=$request->Salary;
        $emp->Perks=$request->Perks;

        $emp->save();
        return redirect()->route('employees');
    }


    
    public function destroy($id)
    {
        //
        $emp=employees::find($id);
        $emp->delete();
        return redirect()->route('employees');

    }
}
