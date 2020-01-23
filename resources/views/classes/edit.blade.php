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
        <form method="POST"  enctype='multipart/form-data' action="{{route('class.update',['id'=>$classes->id])}}">
            {{ csrf_field()}}
            <label>Class Name</label>

        <input value="{{$classes->className}}"type="text" class="form-control" name="className" readonly>
        <label>Class Grade</label>

        <input value="{{$classes->classGrade}}"type="text" class="form-control" name="classGrade" readonly>
        <label>Class Floor</label>

        <input value="{{$classes->ClassFloor}}"type="text" class="form-control" name="ClassFloor">
        <label>Students Number</label>

        <input value="{{$classes->StudentsNumber}}"type="text" class="form-control" name="StudentsNumber">

  
  

<!-- ---------------------------------------------------- -->

<label>Class Officer Name</label>

<select class="custom-select" name="employee_id" value="{{$classes->employee_id}}">

@foreach($employees as $employee)

        @if($classes->employee_id ==$employee->id)
        <option value="{{$employee->id}}" selected hidden>
  {{$employee->Fname}}
  </option>        
  @endif

        @foreach ($roles as $role)
        @if($employee->roles_id==$role->id)
        @if($role->RoleName=='Teacher')
        <option  value="{{$employee->id}}">{{$employee->Fname}}</option>
        @endif
        
        @endif
        @endforeach
@endforeach
</select>


<!-- -------------------------------------------------------- -->

        <button class="btn btn-primary" type="submit">Update form</button>

        <a href="{{route('classes')}}"  >
<input type="button" value="Back"  class="btn btn-secondary btn-sm ">
</a>

            </form>
</div>



@endsection
