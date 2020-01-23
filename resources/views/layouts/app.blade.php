<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}" >

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <style>

.wrapper {
  display: grid;
  grid-template-columns: repeat(6,1fr);
  grid-template-rows: 100px 100px;
  grid-template-areas: 
    "a b c d e f"
    "a g h i j k";
    border:double;
}
.item1 {
  grid-area: a;
  
  border: 1px solid #000000;

  }
.item2 {
  grid-area: b;
  
  border: 1px solid #000000;
  height:100px;

  }
  .item3 {
  grid-area: c;
 
  border: 1px solid #000000;
  height:100px;

  }
  .item4 {
  grid-area: d;
  
  border: 1px solid #000000;
  height:100px;

  }
  .item5 {
  grid-area: e;
 
  border: 1px solid #000000;
  height:100px;

  }
  .item6 {
  grid-area: f;

  border: 1px solid #000000;

  }

  .item7 {
  grid-area: g;

  border: 1px solid #000000;

  }
  .item8 {
  grid-area: h;

  border: 1px solid #000000;
  height:100px;

  }
  .item9 {
  grid-area: i;

  border: 1px solid #000000;
  height:100px;

  }
  .item10 {
  grid-area: j;
 
  border: 1px solid #000000;
  height:100px;

  }
  .item11 {
  grid-area: k;

  border: 1px solid #000000;
  height:100px;

  }

  
.schedule {
  display: grid;
  grid-template-columns: repeat(8,1fr);
  grid-template-rows: 100px;
  grid-template-areas: 
    "a b c d e f g h"
;}
.day {
  grid-area: a;
  
  border: 1px solid #000000;

  }
.les1 {
  grid-area: b;
  
  border: 1px solid #000000;
  height:100px;

  }
  .les2 {
  grid-area: c;
 
  border: 1px solid #000000;
  height:100px;

  }
  .les3 {
  grid-area: d;
  
  border: 1px solid #000000;
  height:100px;

  }
  .les4 {
  grid-area: e;
 
  border: 1px solid #000000;
  height:100px;

  }
  .les5 {
  grid-area: f;

  border: 1px solid #000000;

  }

  .les6 {
  grid-area: g;

  border: 1px solid #000000;

  }
  .les7 {
  grid-area: h;

  border: 1px solid #000000;
  height:100px;

  }
  

    </style>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">

 
                <a class="navbar-brand" href="{{ url('/home') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

               

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                         
                        @else
                            <li class="nav-item dropdown">


                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            <li>
                            <div class="dropdown">
  <button class="glyphicon glyphicon-th" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="position:left">
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
  <a href="{{route('employees')}}">
    <span class="dropdown-item" type="button">Employees</span>
    </a>
    <a href="{{route('employee.create')}}">
    <span class="dropdown-item" type="button">Add New Employee</span>
    </a>
    <a href="{{route('classes')}}">
    <span class="dropdown-item" type="button">Classes</span>
    </a>
    <a href="{{route('roles')}}">
    <span class="dropdown-item" type="button">Roles</span>
    </a>

  </div>
                            
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
