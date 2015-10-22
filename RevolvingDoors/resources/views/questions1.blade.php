@extends ('template.master')

@section('content')
<div class="row">
@include ('template.sidebar')
				
				<div class="page-header less-space">
					<h1> Customers </h1>
				</div>
				<div class="progress progress-taller">
					<div class="progress-bar" style="width : 0%; min-width : 2em">
						0% done
					</div>
				</div>
				
				<!-- Q1 -->
				<div class="panel panel-default">
					<div class="panel-heading">
						1. What problem does your idea solve to your costumers?
					</div>
					<textarea class="panel-body text-input" name="question1">
					</textarea>
				</div>
				
				<!-- Q2 -->
				<div class="panel panel-default">
					<div class="panel-heading">
						2. What type of problem does your idea solve to customers?
					</div>
					<textarea class="panel-body text-input" name="question2">
					</textarea>
				</div>
				
				<!-- Q3 -->
				<div class="panel panel-default">
					<div class="panel-heading">
						3. Are you selling to costumers or businesses?
					</div>
					<div class="panel-body radio">
						<label>
							<input type="radio" name="question3" value="consumers">
							Consumers
						</label>
						<label>
							<input type="radio" name="question3" value="businesses">
							Businesses
						</label>
						<label>
							<input type="radio" name="question3" value="both">
							Both
						</label>
				</div>
			</div>
			<form action="second_questions.php" id="questions" method="post"></form>
			<a class="btn btn-default" href="{{ URL::to('/customers/questions/2') }}">Next</a>
		</div>
		<!-- END MIDSECTION -->
	</div>	
</div>
@endsection