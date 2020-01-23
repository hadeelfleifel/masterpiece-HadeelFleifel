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




        <form method="POST"  enctype='multipart/form-data' action="{{route('subject.update',['id'=>$subjects->id])}}">
            {{ csrf_field()}}

        
            <input value="{{$subjects->subjectName}}"type="text" class="form-control" name="subjectName">
            <input value="{{$subjects->creditHours}}"type="text" class="form-control" name="creditHours">
            <input value="{{$subjects->TimesperWeek}}"type="text" class="form-control" name="TimesperWeek">

            <select class="custom-select" name="employee_id" value="{{$subjects->employee_id}}">

@foreach($employees as $employee)

        @if($subjects->employee_id == $employee->id)
        <option value="{{$subjects->employee_id}}" selected hidden>
  {{$employee->Fname}}
  </option>        
  @endif

        @foreach ($roles as $role)
        @if($employee->roles_id==$role->id)
        @if($role->RoleName=='Teacher')
        <option value="{{$employee->id}}">{{$employee->Fname}}</option>
        @endif
        
        @endif
        @endforeach
@endforeach
</select>
<!-- -------------------------------------------------------- -->

        <button class="btn btn-primary" type="submit">Update form</button>

            </form>

@endsection
