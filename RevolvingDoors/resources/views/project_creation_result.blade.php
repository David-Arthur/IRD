@extends('template.master')
@section('content')

<div class="row">
	@include('template.sidebar')
		<div class="page-header">
			<h1>
				Create Project
			</h1>
		</div>
		<div class="panel panel-default">
			<div class="panel-body">
				<p> {{ $result }} </p>
			</div>
		</div>
	</div>		
	
</div>
@endsection