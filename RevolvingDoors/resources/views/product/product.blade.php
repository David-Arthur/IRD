@extends('template.master')
@section('content')
<div class="container white ">  
    <div class="col-xs-12 text-center"><h2>Our Products</h2></div>
    <div class="container-fluid">
	    <div class="col-xs-12 col-md-4 container"> 
	    	<div class="jumbotron productJumbo text-center">
		    	<!--<span class="glyphicon glyphicon-hand-right"></span>-->
                <img class="img-responsive img-thumbnail" src="{{ URL::to('images/products/manual.jpg')}}">
		        <h3>Manual Doors</h3>
              <!--  <p class="text-left"><small>A manually rotating door designed to move people easily, reduce heating and cooling costs, and limit outside noise from entering the building. </small></p> -->
		    	<a class="btn btn-default btn-lg product-button" href="{{ URL::to('product/type/manual') }}"> Learn More </a>
			</div>
		</div>
		<div class="col-xs-12 col-md-4 container"> 
	    	<div class="jumbotron productJumbo text-center">
		    	<!--<span class="glyphicon glyphicon-refresh "></span>-->
                <img class="img-responsive img-thumbnail" src="{{ URL::to('images/products/automated.jpg')}}">
		        <h3>Automatic Doors</h3>
                <!-- <p class="text-left"><small>A motorized revolving door with front and back sensors to rotate for a pedestrian without hitting them from behind. An automatic door brings the benefits of a manual door at a higher end appearance for your visitors. </small></p> -->
		    	<a class="btn btn-default btn-lg product-button" href="{{ URL::to('product/automatic') }}"> Learn More </a>
			</div>
		</div>
		<div class="col-xs-12 col-md-4 container"> 
	    	<div class="jumbotron productJumbo text-center">
		    	<!--<span class="glyphicon glyphicon-lock "></span>-->
                <img class="img-responsive img-thumbnail" src="{{ URL::to('images/products/security.jpg')}}">
                <h3>Security Doors</h3>
                <!-- <p class="text-left"><small>An automated revolving door with restricted access to keep your business secure by controlling entrance access.</small></p> -->
		    	<a class="btn btn-default btn-lg product-button" href="{{ URL::to('product/type/security') }}"> Learn More </a>
			</div>
		</div>
	</div>
</div> <!-- end container -->
@endsection