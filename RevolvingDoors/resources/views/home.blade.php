@extends('template.master')
@section('content')

<div class="row">
	@include('template.sidebar')
		
	@if (! Auth::check() )
		@include('template.jumbotron', array(
				'other_classes' => 'col-sm-8 col-sm-offset-2 front-jumbotron',
				'title' => 'Lorem Ipsum Dolor', 
				'message' => 'Register now!',
				'button' => 'auth/register',
				'button_message' => 'Sign Up')
				)
	@endif
			
			<div class="col-md-12 text-center">
				<h2> That's what you can do </h2>
			</div>
			<br>
			<div class="row row-centered">
				@for ($i = 0; $i <3; $i++)
				<div class="col-xs-4 col-md-2 col-centered">
					<div class="thumbnail front-thumbnail">
					<img src="{{ URL::to('/images/placeholder.jpg')}}" alt="..." class="img-circle">
					<div class="caption">
						<h3>Suspendisse Posuere</h3>
						<p>Suspendisse posuere metus diam</p>
					</div>
					</div>
				</div>
				@endfor
			</div>
	
			<div class="col-md-12 text-center parallax">
				
			</div>
			<div class="col-md-12 text-center">
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
			</div>
	</div>		
</div>
@endsection