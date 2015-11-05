@extends('template.master')
@section('content')

  <div class="jumbotron jumbo1">
    <div class="container text-center top">
        <img src="{{ URL::to('/images/logo_color_300.png')}}">
    </div>
</div>      
     
<div class="container white ">  
    <div class="col-xs-12 text-center"><h2>Log-In to International Revolving Doors</h2></div>
    @if (isset($error))
        <div class="col-xs-4 col-xs-offset-4 text-center">
            <p>{{ $error }} </p>
        </div>
    @endif               
    <div class="col-xs-4 col-xs-offset-4 text-center login-container">
        <form class="form-horizontal loginform" method="post" action="{{ URL::to('/auth/login') }}">
            {!! csrf_field() !!}
            <div class="form-group">
                <label for="email" class="col-lg-4 control-label">Email</label>
                <div class="col-lg-8">
                    <input type="text" class="form-control" id="email" name="email">
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-lg-4 control-label">Password</label>
                <div class="col-lg-8">
                    <input type="password" class="form-control" id="password" name="password">
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-8 col-lg-offset-4 text-left">
                    <button type="sbmit" class="btn btn-primary ">Submit</button> &nbsp;
                    <button type="reset" class="btn btn-default ">Reset</button>    
                </div>
            </div>    
        </form>
        <h4>Don't have a  username? <a href="{{ URL::to('auth/register') }}">Register Here</a></h4>    

    </div>
    <div class="push white col-xs-12"></div>
</div> <!-- end container -->
@endsection