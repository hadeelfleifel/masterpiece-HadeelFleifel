@extends('layouts.app')

@section('content')

        @if(count($errors)>0)
        <ul class="navber-nav mr-auto">
            @foreach($errors->all() as $error)
            <li class="nav-item active">
                {{$error}}
            </li>
            @endforeach
        </ul>
        @endif
<div class="container">
        <form method="POST" action="{{route('employee.update',['id'=>$emp->id])}}" enctype='multipart/form-data'>
            {{ csrf_field()}}
        <div class="row">
            <div class="col">
            <label>First Name</label>

                <input type="text" class="form-control" value="{{$emp->Fname}}" name="Fname">
            </div>

            <div class="col">
            <label>Second Name</label>

                <input type="text" class="form-control" value="{{$emp->Sname}}" name="Sname">
            </div>

            <div class="col">
            <label>Third Name</label>

                <input type="text" class="form-control" value="{{$emp->Tname}}" name="Tname">
            </div>

            <div class="col">
            <label>Last Name</label>

                <input type="text" class="form-control" value="{{$emp->Lname}}" name="Lname">
            </div>
      
        </div>

    <div class="row">
        <div class="col">
        <label>Date of Birth</label>

            <input type="date" class="form-control" value="{{$emp->DofB}}" name="DofB">
            <label>Join Date</label>

            <input type="date" class="form-control" value="{{$emp->JoinDate}}" name="JoinDate">
            <label>Nationality</label>

            <input type="text" class="form-control" value="{{$emp->Nationality}}" name="Nationality">
            <label>Nationail Number</label>

            <input type="text" class="form-control" value="{{$emp->SSN}}" name="SSN">
            <label>Gender</label>

            <select class="custom-select"name="Gender" value="{{$emp->Gender}}">
           
            </option>
            <option value="Female">
            Female
            </option>
            <option value="Male">
            Male
            </option>
            </select>
            <label>Martial State</label>

            <select class="custom-select"name="Martial" value="{{$emp->Martial}}">
           
            <option value="Single">
            Single
            </option>
            <option value="Married">
            Married
            </option>
            <option value="Divorced">
            Divorced
            </option>
            </select>
            <label>Address</label>

            <textarea type="text" class="form-control" value="{{$emp->Address}}" name="Address">{{$emp->Address}}</textarea>
            <label>Email</label>

            <input type="email" class="form-control" value="{{$emp->Email}}" name="Email">
            <label>Phone</label>

            <input type="text" class="form-control" value="{{$emp->Phone}}" name="Phone">

        </div>

        <div class="col">
        <label>Academic Degree</label>
        <select class="custom-select"name="AcademicDegree" value="{{$emp->AcademicDegree}}">
            
            <option value="Doctor’s Degree">
            Doctor’s Degree
            </option>
            <option value="Master’s Degree">
            Master’s Degree
            </option>
            <option value="bachelors Degree">
            bachelors Degree
            </option>
            <option value="Diplom Degree">
            Diplom Degree
            </option>
            <option value="School Degree">
            School Degree
            </option>
            
            </select>
            <label>Education Majour</label>

        <input type="text" class="form-control" value="{{$emp->EduMajour}}" name="EduMajour">
        <label>Graduate Year</label>

        <input type="date" class="form-control" value="{{$emp->GraduateYear}}"name="GraduateYear">
        <label>Salary</label>

        <input type="text" class="form-control" value="{{$emp->Salary}}" name="Salary">
        <label>Perks</label>

        <input type="text" class="form-control" value="{{$emp->Perks}}" name="Perks">
        <label>Role</label>

        <select class="custom-select" name="roles_id" value="{{$emp->roles_id}}">
  

  @foreach ($roles as $roles)
  @if($emp->roles_id == $roles->id)
  <option selected hidden >
  {{$roles->RoleName}}
  </option>
  @endif
  <option  value="{{$roles->id}}">{{$roles->RoleName}}</option>
  @endforeach
  
</select>
<br></br>
            <a href="{{route('employees')}}"  >
<input type="button" value="Back"  class="btn btn-secondary btn-sm ">
</a>
        <button class="btn btn-primary" type="submit">Update form</button>

        </form>
        </div>
        @endsection
