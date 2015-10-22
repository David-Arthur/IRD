@extends('template.master')


@section('content')
<div class="row">
@include('template.sidebar')
				<div class="page-header less-space">
					<h1> Customers </h1>
				</div>
				
				<div class="progress progress-taller">
					<div class="progress-bar" style="width : 30%; min-width : 2em">
						30% done
					</div>
				</div>
				<!-- Q1 -->
				<div class="panel panel-default col-md-8">
					<div class="panel-heading">
						4. Which demographics are important to define your target customer? This is the group of people who are most likely to buy your product, not just anyone who may happen to purchase it.
					</div>
					<form class="form-inline panel-body">
						<div class="form-group">
							<label>Age Range</label>
							<select class="form-control">
								<option>1</option>
								<option>2</option>
							</select>
						</div>
						<div class="form-group">
							<label>Gender</label>
							<select class="form-control">
								<option>Male</option>
								<option>Female</option>
							</select>
						</div>
						
						<div class="form-group">
							<label>Education</label>
							<select class="form-control">
								<option>Undergraduate</option>
								<option>Graduate</option>
							</select>
						</div>
					</form>
				</div>
				<img class="col-md-4" src="{{ URL::to('/images/video.png')}}" />
				<div class="col-sm-12">
					<button class="btn btn-default" type="submit" name="submit" value="next" formt="questions" style="margin-left : 0 !important;">Next</button>
				</div>
			<form action="second_questions.php" id="questions">
		</div>
		<!-- END MIDSECTION -->
	</div>	
</div>
@endsection