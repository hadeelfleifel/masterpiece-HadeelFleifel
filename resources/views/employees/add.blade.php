@extends('layouts.app')

@section('content')
<div class="container">
@if(count($errors)>0)
        <ul class="navber-nav mr-auto">
            @foreach($errors->all() as $error)
            <li class="nav-item active">
                {{$error}}
            </li>
            @endforeach
        </ul>
        @endif

        <form method="POST"  action="/employee/store">
            {{ csrf_field()}}
        <div class="row">
            <div class="col">
                    <label>First Name</label>
                <input type="text" class="form-control" placeholder="First Name" name="Fname">
            </div>

            <div class="col">
            <label>Second Name</label>
                <input type="text" class="form-control" placeholder="Second Name" name="Sname">
            </div>

            <div class="col">
            <label>Third Name</label>
                <input type="text" class="form-control" placeholder="Third Name" name="Tname">
            </div>

            <div class="col">
            <label>Last Name</label>
                <input type="text" class="form-control" placeholder="Last Name" name="Lname">
            </div>
      
        </div>
        <br></br>
    <div class="row">
        <div class="col">

            <label>Date of Birth</label>

            <input type="date" class="form-control" placeholder="Date of Birth" name="DofB">
            <br></br>

            

            <label>Nationality</label>

            <input type="text" class="form-control" placeholder="Nationality " name="Nationality">
            <br></br>

            <label>Nationail Number</label>

            <input type="text" class="form-control" placeholder="Nationail Number" name="SSN">
            <br></br>


            <label>Genderr</label>

            <select class="custom-select"name="Gender">
            <br></br>

            <option selected hidden>
              Choose
            </option>
            <option value="Female">
            Female
            </option>
            <option value="Male">
            Male
            </option>
            </select>
            <br></br>
            
            <label>Martial State</label>

            <select class="custom-select"name="Martial">
            <option selected hidden>
Choose            </option>
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
            <br></br>




            <label>Address</label>

            <textarea type="text" class="form-control" placeholder="Address" name="Address"></textarea>
            <br></br>

            <label>Email</label>
            <input type="email" class="form-control" placeholder="Email" name="Email">
            <br></br>

            <label>Phone</label>

            <input type="text" class="form-control" placeholder="Phone Number" name="Phone">
            <br></br>

        </div>

        <div class="col">

        <label>Join Date</label>

            <input type="date" class="form-control" placeholder="Join Date" name="JoinDate">
            <br></br>

        <label>Academic Degree</label>

        <select class="custom-select"name="AcademicDegree">
            <option selected hidden>
            Chosse            
            </option>
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
            <br></br>
            <label>Education Majour</label>


        <input type="text" class="form-control" placeholder="Education Majour" name="EduMajour">
        <br></br>
        <label>Graduate Year</label>

        <input type="date" class="form-control" placeholder="Graduate Year"name="GraduateYear">
        <br></br>
        <label>Salary</label>

        <input type="text" class="form-control" placeholder="Salary" name="Salary">
        <br></br>
        <label>Perks</label>

        <input type="text" class="form-control" placeholder="Perks" name="Perks">
        <br></br>
        <label>Role Name</label>


        <select class="custom-select" name="roles_id">
  
            <option selected hidden>
            Choose
            </option>
            @foreach ($roles as $roles)
            <option  value="{{$roles->id}}">{{$roles->RoleName}}</option>
            @endforeach
            
        </select>
<br></br>
        <button class="btn btn-primary" type="submit">Submit</button>

  </div>

</form>  
</div>
@endsection

<!-- 
<div class="form-group" display="null">
                <label for="exampleFormControlFile1">Education Cirtificates:</label>
                <input type="file" class="form-control-file" name="uploaded">
            </div>

        <button class="btn btn-primary" type="submit">Submit</button>


        </div> -->