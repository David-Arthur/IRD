@extends('template.master')
@section('content')

<!-- resources/views/auth/register.blade.php -->
    <div class="jumbotron jumbo1">
    <div class="container text-center top">
        <img src="{{ URL::to('images/logo_color_300.png')}}">
    </div>
</div>

<div class="container white">
    <div class="col-xs-12 text-center">
		<h2>Complete your registration to get full access to all the features</h2>
	</div>

    <form method="POST" action="{{ URL::to('/auth/register') }}" class="col-md-3 col-md-offset-1 form-horizontal">
        {!! csrf_field() !!}
    
        <div class="form-group">
            <label for="address">
                Address
            </label>
            <textbox name="address" value="{{ old('address') }}" class="form-control">
        </div>
    	<div class="form-group">
            <label for="zipcode">
                Zip Code
            </label>
            <input type="number" name="zipcode" value="{{ old('zipcode') }}" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Register</button>
        </div>
    </form>
</div>
@endsection