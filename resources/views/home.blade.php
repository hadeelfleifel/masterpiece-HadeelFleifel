@extends('layouts.app')

@section('content')
<div class="container">
    
<div class="wrapper2">

<div class="item1">Grand Floor</div>

<div class="item12">1 grade A</div>  
<div class="item13">1 grade A</div>  
<div class="item14">1 grade A</div>  
<div class="item15">1 grade A</div>  
<div class="item16">1 grade A</div>  
<div class="item17">1 grade A</div>  





</div>

<div class="wrapper">

<div class="item1">First Floor</div>

@foreach($classes as $class)
@if ($class->className=="1 grade A")
@foreach($schedules as $schedule)
@if($schedule->class_id == $class->id )
<a href="{{route('schedule.show',['id'=>$schedule->class_id])}}">
<div class="item2">1 grade A</div>  
</a>
@break
@endif
@endforeach
@endif
@endforeach

@foreach($classes as $class)
@if ($class->className=="1 grade B")
@foreach($schedules as $schedule)
@if($schedule->class_id == $class->id )
<a href="{{route('schedule.show',['id'=>$schedule->class_id])}}">
<div class="item2">1 grade B</div>  
</a>
@break
@endif
@endforeach
@endif
@endforeach


@foreach($classes as $class)
@if ($class->className=="2 grade A")
@foreach($schedules as $schedule)
@if($schedule->class_id == $class->id )
<a href="{{route('schedule.show',['id'=>$schedule->class_id])}}">
<div class="item2">2 grade A</div>  
</a>
@break
@endif
@endforeach
@endif
@endforeach

@foreach($classes as $class)
@if ($class->className=="2 grade B")
@foreach($schedules as $schedule)
@if($schedule->class_id == $class->id )
<a href="{{route('schedule.show',['id'=>$schedule->class_id])}}">
<div class="item2">2 grade B</div>  
</a>
@break
@endif
@endforeach
@endif
@endforeach

@foreach($classes as $class)
@if ($class->className=="3 grade A")
@foreach($schedules as $schedule)
@if($schedule->class_id == $class->id )
<a href="{{route('schedule.show',['id'=>$schedule->class_id])}}">
<div class="item2">3 grade A</div>  
</a>
@break
@endif
@endforeach
@endif
@endforeach

@foreach($classes as $class)
@if ($class->className=="5 grade B")
@foreach($schedules as $schedule)
@if($schedule->class_id == $class->id )
<a href="{{route('schedule.show',['id'=>$schedule->class_id])}}">
<div class="item2">5 grade B</div>  
</a>
@break
@endif
@endforeach
@endif
@endforeach

@foreach($classes as $class)
@if ($class->className=="5 grade A")
@foreach($schedules as $schedule)
@if($schedule->class_id == $class->id )
<a href="{{route('schedule.show',['id'=>$schedule->class_id])}}">
<div class="item2">5 grade A</div>  
</a>
@break
@endif
@endforeach
@endif
@endforeach

@foreach($classes as $class)
@if ($class->className=="4 grade B")
@foreach($schedules as $schedule)
@if($schedule->class_id == $class->id )
<a href="{{route('schedule.show',['id'=>$schedule->class_id])}}">
<div class="item2">4 grade B</div>  
</a>
@break
@endif
@endforeach
@endif
@endforeach

@foreach($classes as $class)
@if ($class->className=="4 grade A")
@foreach($schedules as $schedule)
@if($schedule->class_id == $class->id )
<a href="{{route('schedule.show',['id'=>$schedule->class_id])}}">
<div class="item2">4 grade A</div>  
</a>
@break
@endif
@endforeach
@endif
@endforeach

@foreach($classes as $class)
@if ($class->className=="3 grade B")
@foreach($schedules as $schedule)
@if($schedule->class_id == $class->id )
<a href="{{route('schedule.show',['id'=>$schedule->class_id])}}">
<div class="item2">3 grade B</div>  
</a>
@break
@endif
@endforeach
@endif
@endforeach
</div>

<div class="wrapper">

<div class="item1">Second Floor</div>
@foreach($classes as $class)
@if ($class->className=="6 grade A")
@foreach($schedules as $schedule)
@if($schedule->class_id == $class->id )
<a href="{{route('schedule.show',['id'=>$schedule->class_id])}}">
<div class="item2">6 grade A</div>  
</a>
@break
@endif
@endforeach
@endif
@endforeach

@foreach($classes as $class)
@if ($class->className=="6 grade B")
@foreach($schedules as $schedule)
@if($schedule->class_id == $class->id )
<a href="{{route('schedule.show',['id'=>$schedule->class_id])}}">
<div class="item2">6 grade B</div>  
</a>
@break
@endif
@endforeach
@endif
@endforeach


@foreach($classes as $class)
@if ($class->className=="7 grade A")
@foreach($schedules as $schedule)
@if($schedule->class_id == $class->id )
<a href="{{route('schedule.show',['id'=>$schedule->class_id])}}">
<div class="item2">7 grade A</div>  
</a>
@break
@endif
@endforeach
@endif
@endforeach

@foreach($classes as $class)
@if ($class->className=="7 grade B")
@foreach($schedules as $schedule)
@if($schedule->class_id == $class->id )
<a href="{{route('schedule.show',['id'=>$schedule->class_id])}}">
<div class="item2">7 grade B</div>  
</a>
@break
@endif
@endforeach
@endif
@endforeach

@foreach($classes as $class)
@if ($class->className=="8 grade A")
@foreach($schedules as $schedule)
@if($schedule->class_id == $class->id )
<a href="{{route('schedule.show',['id'=>$schedule->class_id])}}">
<div class="item2">8 grade A</div>  
</a>
@break
@endif
@endforeach
@endif
@endforeach

@foreach($classes as $class)
@if ($class->className=="10 grade B")
@foreach($schedules as $schedule)
@if($schedule->class_id == $class->id )
<a href="{{route('schedule.show',['id'=>$schedule->class_id])}}">
<div class="item2">10 grade B</div>  
</a>
@break
@endif
@endforeach
@endif
@endforeach

@foreach($classes as $class)
@if ($class->className=="10 grade A")
@foreach($schedules as $schedule)
@if($schedule->class_id == $class->id )
<a href="{{route('schedule.show',['id'=>$schedule->class_id])}}">
<div class="item2">10 grade A</div>  
</a>
@break
@endif
@endforeach
@endif
@endforeach

@foreach($classes as $class)
@if ($class->className=="9 grade B")
@foreach($schedules as $schedule)
@if($schedule->class_id == $class->id )
<a href="{{route('schedule.show',['id'=>$schedule->class_id])}}">
<div class="item2">9 grade B</div>  
</a>
@break
@endif
@endforeach
@endif
@endforeach

@foreach($classes as $class)
@if ($class->className=="9 grade A")
@foreach($schedules as $schedule)
@if($schedule->class_id == $class->id )
<a href="{{route('schedule.show',['id'=>$schedule->class_id])}}">
<div class="item2">9 grade A</div>  
</a>
@break
@endif
@endforeach
@endif
@endforeach

@foreach($classes as $class)
@if ($class->className=="8 grade B")
@foreach($schedules as $schedule)
@if($schedule->class_id == $class->id )
<a href="{{route('schedule.show',['id'=>$schedule->class_id])}}">
<div class="item2">8 grade B</div>  
</a>
@break
@endif
@endforeach
@endif
@endforeach

</div>


</div>
@endsection
