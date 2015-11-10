@extends('template.master')
@section('content')
<div class="container white">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="{{URL::to('images/door.jpg')}}" width="460" height="345">
        <div class="carousel-caption">
          <h3>Door One</h3>
          <p>This is a first door.</p>
        </div>
      </div>

      <div class="item">
        <img src="{{URL::to('images/door.jpg')}}" width="460" height="345">
        <div class="carousel-caption">
          <h3>Door Two</h3>
          <p>This is a second door.</p>
        </div>
      </div>
    
      <div class="item">
        <img src="{{URL::to('images/door.jpg')}}" width="460" height="345">
        <div class="carousel-caption">
          <h3>Door Three</h3>
          <p>This is a third door.</p>
        </div>
      </div>

      <div class="item">
        <img src="{{URL::to('images/door.jpg')}}" width="460" height="345">
        <div class="carousel-caption">
          <h3>Door Four</h3>
          <p>This is a fourth door.</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
@endsection
