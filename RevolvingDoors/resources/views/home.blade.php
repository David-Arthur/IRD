@extends('template.master')
@section('content')
<div class="row" style="margin-top : 120px;">
	<div class="col-sm-12">
		<div class="panel panel-defaut">
			<div class="panel-body">
				<div class="page-header">
					<h1> This is the home page </h1>
					@if (Auth::check())
						<h2> You are logged in </h2>
						<img src="{{ URL::to('images/cat.png')}}" class="thumbnail" style="width : 150px;"/>
					@else
						<h2> You are not logged in </h2>
						<img src="{{ URL::to('images/darth_stw.jpg')}}" class="thumbnail" style="width : 150px;"/>
					@endif
				</div>
			</div>
		</div>
	</div>
</div>
@endsection