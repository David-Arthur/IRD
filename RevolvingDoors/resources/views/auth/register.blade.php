@extends('template.master')
@section('content')
<!-- resources/views/auth/register.blade.php -->
<<<<<<< HEAD
=======

    <div class="jumbotron jumbo1">
    <div class="container text-center top">
        <img src="{{ URL::to('images/logo_color_300.png')}}">
    </div>
</div>

>>>>>>> master
<div class="container white">
    <div class="col-xs-12 text-center"><h2>Sign up and get all the befenits of...</h2></div>

    @if ($errors->has())
        <div class="col-xs-12 alert alert-danger">
            @foreach ($errors->all() as $error)
                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>{{ $error }}<br>        
            @endforeach
        </div>
    @endif

    <form method="POST" action="{{ URL::to('/auth/register') }}" class="col-md-3 col-md-offset-1 form-horizontal">
        {!! csrf_field() !!}
    
        <div class="form-group">
            <label for="name">
                Name
            </label>
            <input type="text" name="name" value="{{ old('name') }}" class="form-control">
        </div>
    
        <div class="form-group">
            <label for="email">
                    Email
            </label>
            <input type="email" name="email" value="{{ old('email') }}" class="form-control">
        </div>
    
        <div class="form-group">
            <label for="password">
                Password
            </label>
            <input type="password" name="password" class="form-control">
        </div>
    
        <div class="form-group">
            <label for="password_confirmation">
                Confirm Password
            </label>    
            <input type="password" name="password_confirmation" class="form-control">
        </div>
    
        <div class="form-group">
                <input type="checkbox" name="architect" value="yes"> Check out if you are an architect
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Register</button>
        </div>
    </form>
</div>
@endsection