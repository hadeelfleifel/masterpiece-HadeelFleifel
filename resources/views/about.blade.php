<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>


<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <!-- Styles -->


        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .grid-container {
  display: grid;
  grid-template-columns: 1fr  ;
  
  margin-top:20px;
  margin-bottom:20px;

}
.grid-item {
  border: 2px solid #bfcadb;
  padding: 10px;
  margin-top:8px;
margin-left:8px;
  border-radius: 30px 20px;
}

            .m-b-md {
                margin-bottom: 30px;
            }
            .footer {
	height: auto;
	padding-bottom:0%;
	width: 100%;

}
        </style>
    </head>
    <body>
        <div class="flex-center position-ref ">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                    <a>About</a>
                        <a href="{{ url('/contact-us') }}">Contact us</a>
                        <a href="{{ route('login') }}">Login</a>
                     
                       
                    @endauth
                </div>
            @endif

            <div class="container">
            <a href="{{ url('/') }}"><h3>Welcome to our...</h3></a>
            <a href="{{ url('/') }}"> <h1 style="text-align:center">School Website</h1>  </a>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="/images/oxford_schools_1.jpg" alt="School1" style="width:100%;">
      </div>

      <div class="item">
        <img src="/images/filtered_image.jpg" alt="School2" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="/images/oxford_schools_3.jpg" alt="School3" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <br></br>

  <div class="grid-container">
<div class="grid-item">


<h2>Our Story</h2>

<p>What distinguishes a great school from a good school? I believe that clarity of purpose, exceptional teachers, and demonstrated outcomes are hallmarks of great schools. A great school is a place with a deep commitment to student learning, where faculty nourish the intellectual, moral, emotional, and social growth of every student. It is a place where students, teachers, and parents embark together on an academic journey with clear and well-defined objectives. It is filled with the joy of discovery and the excitement of personal challenge and growth. It is a community dedicated to developing strength of character and excellence in all dimensions of its students' lives. And it is a place that has a distinctive and lasting impact</p>
<br></br>
I encourage you to explore our website to learn more about all that our School has to offer. I also invite you to visit us in person; please contact our Admission Office to schedule your campus tour. We hope to see you soon!

All my best,

</div>
</div>




  <br></br>
  <footer class="footer">
        <nav class="navbar navbar-default navbar-custom">
            <div class="container-fluid">
            <div class="col-lg-3 col-sm-2 col-xs-3">
                    <h3> Our School </h3>
                    <ul>
                        <li><a href="#"> About us </a></li>
                        
                        <li> <a> Contact us </a> </li>
                        <li> <a> Work with us </a> </li>
                        <li> <p> <a href="https://goo.gl/maps/GWbhdbX4HJ7DGy8D8"><h5> School Address : </br>Amman -Jordan</br> Abdali </br> Orange Coding Academy </h5><span><p> </p></a> <p></span></li>

                    </ul>
                </div>

                <div class="text-center center-block" style="  word-spacing: 30px;">
                <h3 style="  word-spacing: normal;">Follow us</h3>
                    <a href=""><i id="social-fb"  class="fab fa-facebook-square fa-2x social"></i></a>
                    <a href=""><i id="social-tw" class="fab fa-instagram fa-2x social"></i></a>
                    <a href=""><i id="social-gp" class="fab fa-linkedin fa-2x social"></i></a>
                </div>
         

            </div>
            
        </nav>
    </footer>   
     <div class="footer-bottom">
        <div class="container">
            <p class="pull-left copyright"> Copyright © Footer 2014. All right reserved. </p>
       
        </div>
    </div>
</div>


        </div>
    </body>
</html>
