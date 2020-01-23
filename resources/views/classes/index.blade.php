@extends('layouts.app')

@section('content')
<div class="container">
<table class="table">
  <thead>
    <tr>
    <th scope="col">Class Name</th>
      <th scope="col">class Grade</th>
      <th scope="col">Class Floor</th>
      <th scope="col">Students Number</th>
      <th scope="col">Class Officer Name</th>
      <th scope="col">Edit</th>


    </tr>
  </thead>
  <tbody>
   
   @foreach($classes as $class)
<tr>
<td scope="row">{{$class->className}}</td>
<td scope="row">{{$class->classGrade}}</td>
<td scope="row">{{$class->ClassFloor}}</td>
<td scope="row">{{$class->StudentsNumber}}</td>
            @foreach($employees as $employee)
               @if($class->employee_id == $employee->id)
                    <td>{{$employee->Fname}} {{$employee->Lname}}</td>
        @endif
                    @endforeach
                    <td>
                    <a href="{{route('class.edit',['id'=>$class->id])}}">
                        <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                        </td>
</tr>

   @endforeach




            </tbody>


    
   
  </tbody>
</table>

</div>
@endsection

