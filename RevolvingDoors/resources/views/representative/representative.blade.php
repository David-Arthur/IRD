@extends('template.master')
@section('content')
<div class="container white ">  
    <div class="col-xs-12 text-center"><h2>Representatives</h2></div>
	    @foreach ($reps as $rep)
	    <p>
	    {{$rep->name}}
	    </p>
	    <div>
		    Locations
		    @foreach ($rep->locations as $location)
			    <p>
			    {{ $location->state }}
			    </p>
			@endforeach
	    </div>
	    @endforeach
</div> <!-- end container -->
@endsection