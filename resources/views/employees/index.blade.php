@extends('layouts.app')

@section('content')
<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">Employee Name</th>
      <th scope="col">Role</th>
      <th scope="col">Address</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">View/Edit/Delete</th>


    </tr>
  </thead>
  <tbody>
   
            @foreach ($employees as $employee)
            <tr>
            <td scope="row">{{$employee->Fname}}</td>

               
            @foreach($roles as $role)
               @if($employee->roles_id == $role->id)
                    <td>{{$role->RoleName}}</td>
@endif
              @endforeach
              

            <td scope="row">{{$employee->Address}}</td>
            <td scope="row">{{$employee->Email}}</td>
            <td scope="row">{{$employee->Phone}}</td>
            <td>
            <a href="{{route('employee.show',['id'=>$employee->id])}}">
                <span class="glyphicon glyphicon-eye-open"></span>
                </a>
                <a href="{{route('employee.edit',['id'=>$employee->id])}}">
                <span class="glyphicon glyphicon-pencil"></span>
                </a>
                <a href="{{route('employee.delete',['id'=>$employee->id])}}">
                <span class="glyphicon glyphicon-trash"></span>
                </a>

        
        </td>
            </tr>

            @endforeach

    
   
  </tbody>
</table>

</div>
@endsection

