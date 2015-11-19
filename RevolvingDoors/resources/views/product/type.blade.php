@extends('template.master')
@section('content')
<div class="container white">
  <div class="col-xs-12 text-center"><h2>{{ $productType->name }} Revolving Doors</h2></div>

  <!-- Carousel -->
  <div class="carousel slide" id="myCarousel" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    </ol>

    <?php $first = true; ?>
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      @foreach ($GalleryMatrix as $gallery) 
        @foreach ($gallery as $image)
          <div class="item {{ ($first)? 'active' : ''}}">
            <?php $first = false; ?>
            <img src="{{ URL::to('/'.$image->file_name) }}" class="carousel-image">
            <div class="container">
              <div class="carousel-caption">
                <h3>Door One</h3>
                <p>This is a first door.</p>
              </div>
            </div>
          </div>
        @endforeach
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

  <div class="container"> 
      <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
        <h2>Description</h2>
        <?php echo $productType->description; ?>
        </div>
      </div>
  </div>

  <div class="container"> 
    <div class="row">
  @foreach ($productType->products as $product)
        <div class="col-sm-12 col-md-4">
          <div class="jumbotron productJumbo text-center">
            <h3>{{ $product->name }} Door</h3>
            <?php echo $product->description; ?>
          </div>
        </div>
  @endforeach
    </div>
  </div>

</div>  
<script type="text/javascript">
  $(document).ready(function()
  {
    $('#myCarousel').carousel();
  })
</script>
@endsection
