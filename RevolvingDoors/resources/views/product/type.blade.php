@extends('template.master')
@section('content')
<div class="container white">
  <div class="col-xs-12 text-center"><h2>{{ $productType->name }}</h2></div>

  <!-- Carousel -->
  <div class="carousel slide myCarousel" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      @foreach ($productType->gallery as $image)
        <div class="item">
          <img src="{{ URL::to($image->url) }}" width="460" height="345">
          <div class="carousel-caption">
            <h3>Door One</h3>
            <p>This is a first door.</p>
          </div>
        </div>
      @endforeach

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
  <!-- End Carousel -->

  <div class="container-fluid">
    <div class="col-xs-12 container"> 
      <div class="jumbotron  text-justify">
        {{$productType->description}}
      </div>
    </div>
  </div>

  @foreach ($productType->product as $product)
    <div class="col-xs-4 container"> 
      <div class="jumbotron  text-justify">
        {{ $product }}
      </div>
    </div>
  @endforeach

</div>  
@endsection
