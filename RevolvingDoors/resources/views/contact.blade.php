@extends('template.master')
@section('content') 
<div class="container white">
	<div class="col-xs-12 text-center"><h2>Contact Us</h2></div>
	<div class="row">
		<div class="col-xs-6">
			<div class="panel panel-default">
				<div class="panel-heading">Our office</div>
				
					<ul class="list-group">
						<li class="list-group-item">
							
							<span class="glyphicon glyphicon-map-marker"></span>
							<span> International Reveolving Door Company </span><br>
							<span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2138 N. Sixth Avenue </span><br>
							<span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Evansville, IN. 47710 USA </span>
						</li>
						<li class="list-group-item">
							
							<span class="glyphicon glyphicon-phone-alt"></span>
							<span> Tel: 1-800-745-4726 --or-- 1-812--425-3311</span>
						</li>
						<li class="list-group-item">
							
							<span class="glyphicon glyphicon-print"></span>
							<span> Fax: 1-812-426-2682</span>
						</li>
						<li class="list-group-item">
							
							<span class="glyphicon glyphicon-envelope"></span>
							<span> Email: info@internationalrevolvingdoors.com</span>
							
						</li>
					</ul>
			</div>
		</div>
		<div class="col-xs-1"></div>
		<div class="col-xs-6">
			<div class="panel panel-default">
				<div class="panel-heading">Get in touch</div>
				<form class="form-horizontal contactform" method="post" action="{{ URL::to('/auth/login') }}">
					<div class="form-group">
						<br>
						<label for="name" class="col-sm-2 control-label">Name</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="">
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-9">
							<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
						</div>
					</div>
					<div class="form-group">
						<label for="message" class="col-sm-2 control-label">Message</label>
						<div class="col-sm-9">
							<textarea class="form-control" rows="4" name="message"></textarea>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-9 col-sm-offset-2">
							<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
						</div>
					</div>
					<div class="form-group">
						@if (isset($message))
					        <div class="col-xs-4 col-xs-offset-4 text-center">
					            <p>{{ $message }} </p>
					        </div>
					    @endif    
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection