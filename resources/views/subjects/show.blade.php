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


            <div class="col">
            <label>Subject Name</label>

                <input type="text" class="form-control" value="{{$subjects->subjectName}}" name="Fname" readonly>
            </div>

@foreach($employees as $employee)
@if($subjects->employee_id == $employee->id)
            <div class="col">
            <label>Subject Teacher</label>
                <input type="text" class="form-control" value="{{$employee->Fname}} {{$employee->Lname}}" name="Tname"readonly>
            </div>
@endif
@endforeach

            <div class="col">
            <label>credit Hours</label>

                <input type="text" class="form-control" value="{{$subjects->creditHours}}" name="Sname"readonly>
            </div>

            <div class="col">
            <label>Times per Week</label>

                <input type="text" class="form-control" value="{{$subjects->TimesperWeek}}" name="Tname"readonly>
            </div>
            <br></br>
            <a href="{{route('home')}}"  >
<input type="button" value="Back"  class="btn btn-secondary btn-sm ">
</a>
    </form>
              
</div>

@endsection