@extends('template.master')
@section('content') 
<div class="container bodydiv">
	<div class="col-sm-12">
		<div class="panel panel-defaut">
			<div class="panel-body">
			<!--	<div class="page-header">
					@if (Auth::check())
						<h2> You are logged in </h2>
						<img src="{{ URL::to('images/cat.png')}}" class="thumbnail" style="width : 150px;"/>
						@role('admin')
						<p>Aaaand this user is an <strong>admin</strong>.</p>
						@endrole
						@role('architect')
						<p>Aaaand this user is an architect.</p>
						@endrole
						@role('buyers')
						<p>Aaaand this user is a buyer.</p>
						@endrole
					@else
						<h2> You are not logged in </h2>
						<img src="{{ URL::to('images/darth_stw.jpg')}}" class="thumbnail" style="width : 150px;"/>
					@endif
				</div> <!-- End of Page Header -->

        <div class="col-xs-12 highlight hometriad"> <!-- One image highlight -->
            <div class="col-md-7 vcenter">    
                <img class="img-responsive img-thumbnail" src="{{ URL::to('images/NyPubLibLg.jpg')}}">
            </div>
            <div class="col-md-4 vcenter">
                <h1 class="vcenter">IRD is the industry leader in Revolving Doors!</h1>
                    <h4>See why our products have the</h4>
                <button type="button" class="btn btn-default btn-lg btn-block vcenter">IRD Advantage</button>
            </div>
        </div> <!-- end of one image highlight -->        
                
                
        
        <div class="col-xs-12 white hometriad"> <!-- THree Image highlight section -->
            <h4 class="text-center">Providing quality products, quality service, and quality parts for your custom built revolving door needs.</h4>
            <div class="col-sm-4 text-center"> 
                <p><img class="img-responsive img-thumbnail" width="75%" src="{{ URL::to('images/repmap.jpg')}}" > </p>
                <p><a class="btn btn-default" href="#" role="button">Find a Sales Rep</a></p>
            </div>    
            <div class="col-sm-4 text-center"> 
                <p> <img class="img-responsive img-thumbnail" width="75%" src="{{ URL::to('images/products.jpg')}}"> </p>
                <p><a class="btn btn-default" href="{{ URL::to('product/') }}" role="button">See our Products</a></p>
            </div> 
            <div class="col-sm-4 text-center">
                <p><img class="img-responsive img-thumbnail" width="75%" src="{{ URL::to('images/parts.jpg')}}"></p>
                <p><a class="btn btn-default" href="#" role="button">Find a Replacement Part</a></p>
            </div> 
         </div> <!-- End of three image section -->
                
                

            
                
                
                
			</div>
		</div>
	</div>
 

</div> <!-- End container -->
@endsection