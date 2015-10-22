@extends('template.master')
@section('content')

<div class="row">
	@include('template.sidebar')
		<div class="page-header">
			<h1>
				These are the projects you own
			</h1>
		</div>
		<table class="table table-striped">
			<tr>
				<th>
					Name 
				</th>
				<th>
					Created on 
				</th>
			</tr>
			@foreach ($projects as $project)
				<tr>
					<td>
						{{ $project->name }}
					</td>
					<td>
						{{ $project->created_at}}
					</td>
				</tr>
			@endforeach
		</table>
	</div>		
	
</div>
@endsection