@extends('template.master')
@section('content')
<div class="jumbotron jumbo1">
    <div class="text-center top">
        <img src="{{ URL::to('images/logo_color_300.png')}}">
    </div>
</div>  
<div class="container">
	<div class="col-sm-12">
		<div class="panel panel-defaut">
			<div class="panel-body">
				<div class="page-header">
					<h1> This is the home  page </h1>
					@if (Auth::check())
						<h2> You are logged in </h2>
						<img src="{{ URL::to('images/cat.png')}}" class="thumbnail" style="width : 150px;"/>
						@role('admin')
						<p>Aaaand this user is an <strong>admin</strong>.</p>
						@endrole
						@role('architect')
						<p>Aaaand this user is an architect.</p>
						@endrole
<<<<<<< HEAD
                        
=======
						@role('buyers')
						<p>Aaaand this user is a buyer.</p>
						@endrole
>>>>>>> master
					@else
						<h2> You are not logged in </h2>
						<img src="{{ URL::to('images/darth_stw.jpg')}}" class="thumbnail" style="width : 150px;"/>
					@endif
				</div>
			</div>
		</div>
	</div>
 </div> <!-- End container -->
@endsection