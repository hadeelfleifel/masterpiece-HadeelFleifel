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
        <form>
            {{ csrf_field()}}
        <div class="row">
            <div class="col">
            <label>First Name</label>

                <input type="text" class="form-control" value="{{$emp->Fname}}" name="Fname" readonly>
            </div>

            <div class="col">
            <label>Second Name</label>

                <input type="text" class="form-control" value="{{$emp->Sname}}" name="Sname"readonly>
            </div>

            <div class="col">
            <label>Third Name</label>

                <input type="text" class="form-control" value="{{$emp->Tname}}" name="Tname"readonly>
            </div>

            <div class="col">
            <label>Last Name</label>

                <input type="text" class="form-control" value="{{$emp->Lname}}" name="Lname" readonly>
            </div>
      
        </div>
        <br></br>
    <div class="row">
        <div class="col">
        <label>Date of Birth</label>

            <input type="date" class="form-control" value="{{$emp->DofB}}" name="DofB" readonly>
            <label>Join Date</label>

            <input type="date" class="form-control" value="{{$emp->JoinDate}}" name="JoinDate" readonly>
            <label>Nationality</label>

            <input type="text" class="form-control" value="{{$emp->Nationality}}" name="Nationality" readonly>
            <label>Nationail Number</label>

            <input type="text" class="form-control" value="{{$emp->SSN}}" name="SSN" readonly>
            <label>Gender</label>

            <input type="text" class="form-control" value="{{$emp->Gender}}" readonly>
            <label>Martial State</label>



            <input type="text" class="form-control" value="{{$emp->Martial}}"  readonly>
            <label>Address</label>


            <textarea type="text" class="form-control" value="{{$emp->Address}}" name="Address" readonly>{{$emp->Address}}</textarea>
            <label>Email</label>

            <input type="email" class="form-control" value="{{$emp->Email}}" name="Email" readonly>
            <label>Phone</label>

            <input type="text" class="form-control" value="{{$emp->Phone}}" name="Phone" readonly>

        </div>

        <div class="col">
        <label>Academic Degree</label>

        <input type="text" class="form-control" value="{{$emp->AcademicDegree}}" readonly>

           
        <label>Education Majour</label>

        <input type="text" class="form-control" value="{{$emp->EduMajour}}" name="EduMajour" readonly>
        <label>Graduate Year</label>

        <input type="date" class="form-control" value="{{$emp->GraduateYear}}"name="GraduateYear"readonly>
        <label>Salary</label>

        <input type="text" class="form-control" value="{{$emp->Salary}}" name="Salary"readonly>
        <label>Perks</label>

        <input type="text" class="form-control" value="{{$emp->Perks}}" name="Perks"readonly>
        @foreach($roles as $role)
               @if($emp->roles_id == $role->id)
               <label>Role</label>

                    <input type="text" class="form-control" value="{{$role->RoleName}}" readonly>
                @endif
              @endforeach

              <br></br>
            <a href="{{route('employees')}}"  >
<input type="button" value="Back"  class="btn btn-secondary btn-sm ">
</a>
              
</form>



</div>

@endsection
