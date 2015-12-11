@extends('template.master')

@section('content')
<div class="container white bodydiv">
  <div class="col-sm-12 col-md-8">
  	@if ($errors->has())
        <div class="col-xs-12 alert alert-danger">
            @foreach ($errors->all() as $error)
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>{{ $error }}<br>        
            @endforeach
        </div>
    @endif
  	<form method="post" action="{{ URL::to('reps/add') }}">
  		{!! csrf_field() !!}
  		<div class="form-group">
  			<label>
  				Name
  			</label>
  			<input type="text" name="name" class="form-control" />
  		</div>
  		<div class="form-group">
  			<label>
  				Description
  			</label>
  			<textarea type="text" name="description" class="form-control"></textarea>
  		</div>
  		<div class="form-group">
  			<label>
  				Phone Number
  			</label>
  			<input type="tel" name="phoneNumber" class="form-control" />
  		</div>
  		<div class="form-group">
  			<label>
  				Phone Number
  			</label>
  			<select name="states">
  				
  			</select>
  		</div>
  		<div class="form-group">
  			<label>
  				Avatar
  			</label>
  			<input type="file" name="avatar" class="form-control" />
  		</div>

  	</form>
  </div>
</div>
@endsection