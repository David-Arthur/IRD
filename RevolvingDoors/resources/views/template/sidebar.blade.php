@if (Auth::check())
	
	<div class="col-md-2 full-height">
		<div class="list-group">
			<a href="{{ URL::to('/projects/create') }}" class="list-group-item">
				New Project 
			</a>
			<a href="{{ URL::to('/projects/list') }}" class="list-group-item">
				List Projects
			</a>
		</div>
	</div>
	
	<div class="col-md-10 col-md-offset-2">
@else
	<div class="col-md-12">
@endif
