<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>{{ $page_title }}</title>

    <!-- Bootstrap -->
    <link href="{{ URL::to('/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('/css/ird.css')}}" rel="stylesheet">
       
      
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
           <a class="navbar-brand" href="{{ URL::to('/')}}">IRD Group, Inc. </a>  
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('/')}}">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
            <!--    <li role="separator" class="divider"></li>
                <li class="dropdown-header">Specific List</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li> -->
              </ul>
            </li>
          </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><div style="margin-top:13px; color:white;">  
                
               @if (Auth::check())
						You are logged in
						@role('admin')
                            as an <strong>admin</strong>.</p>
						@endrole
						@role('architect')
				            as an architect.</p>
						@endrole
                        @role('buyers')
						      as a buyer.</p>
						@endrole
					@else
						 You are not logged in 
					@endif
                
                
                
                
                
                <!-- IF USER IS NOT LOGGED -->
                @if (!Auth::check())
                <a href="{{ URL::to('auth/login') }}" class="btn btn-primary btn-xs log-in-button" style="color:white;" role="button">Log-In</a>
                <!-- IF USER IS LOGGED -->
                @else
                <a href="{{ URL::to('auth/logout') }}" class="btn btn-primary btn-xs log-in-button" style="color:white;" role="button">Log-Out</a>
                @endif
                </div>
            </li>
          </ul>     
      
        </div><!--/.nav-collapse -->
      </div>
    </nav>


