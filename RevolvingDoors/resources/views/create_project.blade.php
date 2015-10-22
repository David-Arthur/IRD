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
				<form method="POST" action="{{ URL::to('/projects/create') }}">
            	{!! csrf_field() !!}
				
					<div class="form-group">
						<label for="name">
							Project's Name
						</label>
						<input type="text" name="name" placeholder="..." class="form-control"/>
					</div>
					<button type="submit" name="submit" class="btn btn-primary" value="submit">Create</button>
				</form>
			</div>
		</div>
	</div>		
	
</div>
@endsection