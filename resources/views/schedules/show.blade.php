@extends('layouts.app')

@section('content')
<div class="container">
    
<!-- <?php
echo $schedules;
?>  -->

<div class="schedule">
<div class="day">DAY</div>
<div class="les1">Lesson 1</div>  
<div class="les2">Lesson 2</div>
<div class="les3">Lesson 3</div>
<div class="les4">Lesson 4</div>
<div class="les5">Lesson 5</div>
<div class="les6">Lesson 6</div>
<div class="les7">Lesson 7</div>
</div>



@foreach($schedules as $schedules)
<div class="schedule">



@foreach($subjects as $subject)

@if($schedules->day == 'Sunday')
<div class="day">{{$schedules->day}}</div>

@if($schedules->lesson1==$subject->id)
<div class="les1" value="{{$schedules->lesson1}}">
<a href="{{route('subject.show',['id'=>$subject->id])}}">
{{$subject->subjectName}}
</a></div> 
@endif 

@if($schedules->lesson2==$subject->id)
<div class="les2" value='{{$schedules->lesson2}}'>
<a href="{{route('subject.show',['id'=>$subject->id])}}">
{{$subject->subjectName}}
</a>
</div>
@endif 

@if($schedules->lesson3==$subject->id)
<div class="les3" value='{{$schedules->lesson3}}'>
<a href="{{route('subject.show',['id'=>$subject->id])}}">
{{$subject->subjectName}}
</a>
</div>
@endif

@if($schedules->lesson4==$subject->id)

<div class="les4" value='{{$schedules->lesson4}}'>
<a href="{{route('subject.show',['id'=>$subject->id])}}">
{{$subject->subjectName}}</div>
</a>
@endif 

@if($schedules->lesson5==$subject->id)
<div class="les5" value='{{$schedules->lesson5}}'>
<a href="{{route('subject.show',['id'=>$subject->id])}}">

{{$subject->subjectName}}
</a>
</div>
@endif 

@if($schedules->lesson6==$subject->id)
<div class="les6" value='{{$schedules->lesson6}}'>
<a href="{{route('subject.show',['id'=>$subject->id])}}">
{{$subject->subjectName}}
</a>
</div>
@else
<div class="les6" ></div>
@endif 

@if($schedules->lesson7==$subject->id)
<div class="les7" value='{{$schedules->lesson7}}'>
<a href="{{route('subject.show',['id'=>$subject->id])}}">
{{$subject->subjectName}}
</a>
</div>
@else
<div class="les7" ></div>
@endif 



@endif
@endforeach


@foreach($subjects as $subject)
@if($schedules->day == 'Monday')
<div class="day">{{$schedules->day}}</div>

@if($schedules->lesson1==$subject->id)
<div class="les1" value="{{$schedules->lesson1}}">
<a href="{{route('subject.show',['id'=>$subject->id])}}">
{{$subject->subjectName}}
</a></div> 
@endif 

@if($schedules->lesson2==$subject->id)
<div class="les2" value='{{$schedules->lesson2}}'>
<a href="{{route('subject.show',['id'=>$subject->id])}}">
{{$subject->subjectName}}
</a>
</div>
@endif 

@if($schedules->lesson3==$subject->id)
<div class="les3" value='{{$schedules->lesson3}}'>
<a href="{{route('subject.show',['id'=>$subject->id])}}">
{{$subject->subjectName}}
</a>
</div>
@endif

@if($schedules->lesson4==$subject->id)

<div class="les4" value='{{$schedules->lesson4}}'>
<a href="{{route('subject.show',['id'=>$subject->id])}}">
{{$subject->subjectName}}</div>
</a>
@endif 

@if($schedules->lesson5==$subject->id)
<div class="les5" value='{{$schedules->lesson5}}'>
<a href="{{route('subject.show',['id'=>$subject->id])}}">

{{$subject->subjectName}}
</a>
</div>
@endif 

@if($schedules->lesson6==$subject->id)
<div class="les6" value='{{$schedules->lesson6}}'>
<a href="{{route('subject.show',['id'=>$subject->id])}}">
{{$subject->subjectName}}
</a>
</div>
@else
<div class="les6" ></div>
@endif 

@if($schedules->lesson7==$subject->id)
<div class="les7" value='{{$schedules->lesson7}}'>
<a href="{{route('subject.show',['id'=>$subject->id])}}">
{{$subject->subjectName}}
</a>
</div>
@else
<div class="les7" ></div>
@endif 



@endif
@endforeach








@foreach($subjects as $subject)
@if($schedules->day == 'Tuesday')
<div class="day">{{$schedules->day}}</div>

@if($schedules->lesson1==$subject->id)
<div class="les1" value="{{$schedules->lesson1}}">
<a href="{{route('subject.show',['id'=>$subject->id])}}">
{{$subject->subjectName}}
</a></div> 
@endif 

@if($schedules->lesson2==$subject->id)
<div class="les2" value='{{$schedules->lesson2}}'>
<a href="{{route('subject.show',['id'=>$subject->id])}}">
{{$subject->subjectName}}
</a>
</div>
@endif 

@if($schedules->lesson3==$subject->id)
<div class="les3" value='{{$schedules->lesson3}}'>
<a href="{{route('subject.show',['id'=>$subject->id])}}">
{{$subject->subjectName}}
</a>
</div>
@endif

@if($schedules->lesson4==$subject->id)

<div class="les4" value='{{$schedules->lesson4}}'>
<a href="{{route('subject.show',['id'=>$subject->id])}}">
{{$subject->subjectName}}</div>
</a>
@endif 

@if($schedules->lesson5==$subject->id)
<div class="les5" value='{{$schedules->lesson5}}'>
<a href="{{route('subject.show',['id'=>$subject->id])}}">

{{$subject->subjectName}}
</a>
</div>
@endif 

@if($schedules->lesson6==$subject->id)
<div class="les6" value='{{$schedules->lesson6}}'>
<a href="{{route('subject.show',['id'=>$subject->id])}}">
{{$subject->subjectName}}
</a>
</div>
@else
<div class="les6" ></div>
@endif 

@if($schedules->lesson7==$subject->id)
<div class="les7" value='{{$schedules->lesson7}}'>
<a href="{{route('subject.show',['id'=>$subject->id])}}">
{{$subject->subjectName}}
</a>
</div>
@else
<div class="les7" ></div>
@endif 



@endif
@endforeach



@foreach($subjects as $subject)
@if($schedules->day == 'Wednesday')
<div class="day">{{$schedules->day}}</div>

@if($schedules->lesson1==$subject->id)
<div class="les1" value="{{$schedules->lesson1}}">
<a href="{{route('subject.show',['id'=>$subject->id])}}">
{{$subject->subjectName}}
</a></div> 
@endif 

@if($schedules->lesson2==$subject->id)
<div class="les2" value='{{$schedules->lesson2}}'>
<a href="{{route('subject.show',['id'=>$subject->id])}}">
{{$subject->subjectName}}
</a>
</div>
@endif 

@if($schedules->lesson3==$subject->id)
<div class="les3" value='{{$schedules->lesson3}}'>
<a href="{{route('subject.show',['id'=>$subject->id])}}">
{{$subject->subjectName}}
</a>
</div>
@endif

@if($schedules->lesson4==$subject->id)

<div class="les4" value='{{$schedules->lesson4}}'>
<a href="{{route('subject.show',['id'=>$subject->id])}}">
{{$subject->subjectName}}</div>
</a>
@endif 

@if($schedules->lesson5==$subject->id)
<div class="les5" value='{{$schedules->lesson5}}'>
<a href="{{route('subject.show',['id'=>$subject->id])}}">

{{$subject->subjectName}}
</a>
</div>
@endif 

@if($schedules->lesson6==$subject->id)
<div class="les6" value='{{$schedules->lesson6}}'>
<a href="{{route('subject.show',['id'=>$subject->id])}}">
{{$subject->subjectName}}
</a>
</div>
@else
<div class="les6" ></div>
@endif 

@if($schedules->lesson7==$subject->id)
<div class="les7" value='{{$schedules->lesson7}}'>
<a href="{{route('subject.show',['id'=>$subject->id])}}">
{{$subject->subjectName}}
</a>
</div>
@else
<div class="les7" ></div>
@endif 



@endif
@endforeach





@foreach($subjects as $subject)
@if($schedules->day == 'Thursday')
<div class="day">{{$schedules->day}}</div>

@if($schedules->lesson1==$subject->id)
<div class="les1" value="{{$schedules->lesson1}}">
<a href="{{route('subject.show',['id'=>$subject->id])}}">
{{$subject->subjectName}}
</a></div> 
@endif 

@if($schedules->lesson2==$subject->id)
<div class="les2" value='{{$schedules->lesson2}}'>
<a href="{{route('subject.show',['id'=>$subject->id])}}">
{{$subject->subjectName}}
</a>
</div>
@endif 

@if($schedules->lesson3==$subject->id)
<div class="les3" value='{{$schedules->lesson3}}'>
<a href="{{route('subject.show',['id'=>$subject->id])}}">
{{$subject->subjectName}}
</a>
</div>
@endif

@if($schedules->lesson4==$subject->id)

<div class="les4" value='{{$schedules->lesson4}}'>
<a href="{{route('subject.show',['id'=>$subject->id])}}">
{{$subject->subjectName}}</div>
</a>
@endif 

@if($schedules->lesson5==$subject->id)
<div class="les5" value='{{$schedules->lesson5}}'>
<a href="{{route('subject.show',['id'=>$subject->id])}}">

{{$subject->subjectName}}
</a>
</div>
@endif 

@if($schedules->lesson6==$subject->id)
<div class="les6" value='{{$schedules->lesson6}}'>
<a href="{{route('subject.show',['id'=>$subject->id])}}">
{{$subject->subjectName}}
</a>
</div>
@else
<div class="les6" ></div>
@endif 

@if($schedules->lesson7==$subject->id)
<div class="les7" value='{{$schedules->lesson7}}'>
<a href="{{route('subject.show',['id'=>$subject->id])}}">
{{$subject->subjectName}}
</a>
</div>
@else
<div class="les7" ></div>
@endif 



@endif
@endforeach



</div>
@endforeach


</div>
@endsection
