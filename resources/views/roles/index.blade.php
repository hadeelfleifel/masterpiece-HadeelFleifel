@extends('layouts.app')

@section('content')
<div class="container" style="width:40%">
    


<table class="table">
  <thead>
    <tr>
      <th scope="col">Role</th>


    </tr>
  </thead>
  <tbody>
  
    @foreach($roles as $roles)
    <tr class="list-group">
<td class="list-group-item" scope="row">{{$roles->RoleName}}</td>

 

                

                </tr>
    @endforeach

  
    
  
  </tbody>
</table>



    </div>
</div>



@endsection
