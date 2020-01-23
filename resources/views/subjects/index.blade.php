@extends('layouts.app')

@section('content')
<div class="container">
<table class="table">
  <thead>
    <tr>
    <th scope="col">subjectName</th>
      <th scope="col">creditHours</th>
      <th scope="col">TimesperWeek</th>
      <th scope="col">employee_id</th>
      <th scope="col">Edit</th>



    </tr>
  </thead>
  <tbody>
  <tr>
  @foreach($subjects as $subject)
    <td>{{$subject->subjectName}}</td>
    <td>{{$subject->creditHours}}</td>
    <td>{{$subject->TimesperWeek}}</td>
    @foreach($employees as $employee)
    @if($subject->employee_id == $employee ->id)
    <td>{{$employee ->Fname}}</td>
@endif
@endforeach
  @endforeach

  <td>
                    <a href="{{route('subject.edit',['id'=>$subject->id])}}">
                        <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                        </td>
</tr>
            </tbody>


    
   
  </tbody>
</table>

</div>
@endsection

