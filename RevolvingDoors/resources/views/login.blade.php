@extends('template.master')
@section('content')
<!-- resources/views/auth/login.blade.php -->

<div class="container">
    <div class="row">
        <div class="col-md-4 login-image col-md-offset-2">
            <div class="content text-center">
                <h2> It's you ready for your busines </h2>
            </div>
        </div>
        <form method="POST" action="{{ URL::to('/auth/login') }}" class="col-md-3 col-md-offset-1 form-horizontal">
            {!! csrf_field() !!}
        
            <div class="form-group">
                <label for="email">
                    Email
                </label>
                <div>
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control">
                </div>
            </div>
        
            <div class="form-group">
                <label for="email">
                    Password
                </label>
                <div>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
            </div>
        
            <div class="form-group">
                <input type="checkbox" name="remember"> Remember Me
            </div>
        
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </form>
@endsection