@extends('template.master')
@section('content')
<div class="container white ">  

    <div class="col-xs-12 text-center">
    	<h2>Representatives</h2>
    </div>

    <div>
    	<p>
    		Find a Representative near you.
    	</p>
    </div>

    <form method="post" action="{{ URL::to('reps/find')}}">
                {!! csrf_field() !!}
    <div class="form-group">
    	<label> Choose your state </label>
    	<select name="state">
    		@foreach ( $locations as $location)
    			<option value="{{ $location->state }}"> {{ $location->state }}</option>
    		@endforeach
    	</select>
    	<button class="btn btn-default">
			Find
		</button>
    </div>
    </form>
    <p>
    	Or just click on the state below 
    </p>

    <div id="map" style="width: 800px; height: 600px"></div>
    <noscript><b>JavaScript must be enabled in order for you to use Google Maps.</b>
      However, it seems JavaScript is either disabled or not supported by your browser.
      To view Google Maps, enable JavaScript by changing your browser options, and then
      try again.
    </noscript>
    <script type="text/javascript">
    //<![CDATA[
    if (GBrowserIsCompatible()) {
      var polys = [];
      var labels = [];
      // Display the map, with some controls and set the initial location
      var map = new GMap2(document.getElementById("map"));
      map.addControl(new GLargeMapControl());
      map.addControl(new GMapTypeControl());
      map.setCenter(new GLatLng(42.16,-100.72),4);
      GEvent.addListener(map, "click", function(overlay,point) {
        var T1 = new Date();
        if (!overlay) {
          for (var i=0; i<polys.length; i++) {
          	//get where you clicked and find the state
            if (polys[i].Contains(point)) {
              var area = polys[i].Area()/1000000;
              var sqmiles = area/2.58998811;
              var T2 = new Date();

              window.location.href = "{{ URL::to('reps/find/state/') }}/" + labels[i];


              // map.openInfoWindowHtml(point,"You clicked on "+x.name+"<br>The area of "+labels[i]+" is "+parseInt(area)
              //       +" sq km.<br>that's "+parseInt(sqmiles)+" square miles<br>"
              //       +"Its boundary is "+parseInt(polys[i].Distance()/1609.344)+" miles long"
              //       +"<hr>Time taken = "+(T2.getTime()-T1.getTime())+" milliseconds"
              // );
              break;             
              //i = 999; // Jump out of loop
            }
          }
        }
      });
      // Read the data from states.xml
      var request = GXmlHttp.create();
      var availableStates = [];

      @foreach ( $locations as $location )

      availableStates.push("{{ $location->state }}");

      @endforeach

      request.open("GET", "{{URL::to('xml/states.xml')}}", true);
      request.onreadystatechange = function() {
        if (request.readyState == 4) {
          var xmlDoc = GXml.parse(request.responseText);
          // ========= Now process the polylines ===========
          var states = xmlDoc.documentElement.getElementsByTagName("state");
          // read each line


          for (var a = 0; a < states.length; a++) {
            
	        var label  = states[a].getAttribute("name");

            if ( availableStates.indexOf(label) != -1)
            {
	            // get any state attributes

		          //var colour = states[a].getAttribute("colour");

		          var colour = "#99FF66";
		          // read each point on that line
		          var points = states[a].getElementsByTagName("point");
		          var pts = [];
		          for (var i = 0; i < points.length; i++) {
		             pts[i] = new GLatLng(parseFloat(points[i].getAttribute("lat")),
		                                 parseFloat(points[i].getAttribute("lng")));
		          }
		          var poly = new GPolygon(pts,"#000000",1,1,colour,0.5,{clickable:false});
		          polys.push(poly);
		          labels.push(label);
		          map.addOverlay(poly);
            }
          }
          // ================================================
        }
      }
      request.send(null);
    }
    // display a warning if the browser was not compatible
    else {
      alert("Sorry, the Google Maps API is not compatible with this browser");
    }
    // This Javascript is based on code provided by the
    // Community Church Javascript Team
    // http://www.bisphamchurch.org.uk/
    // http://econym.org.uk/gmap/
    //]]>
    </script>
    
    <!--
	<div class="col-md-12 text-center"><h2>Representatives</h2></div>
	<div class="form-group text-center row">
	<label for="sel1">Select location:</label>
		<select class="form-control col-md-4" id="sel1">
			<option value="AL">Alabama</option>
			<option value="AK">Alaska</option>
			<option value="AZ">Arizona</option>
			<option value="AR">Arkansas</option>
			<option value="CA">California</option>
			<option value="CO">Colorado</option>
			<option value="CT">Connecticut</option>
			<option value="DE">Delaware</option>
			<option value="DC">District Of Columbia</option>
			<option value="FL">Florida</option>
			<option value="GA">Georgia</option>
			<option value="HI">Hawaii</option>
			<option value="ID">Idaho</option>
			<option value="IL">Illinois</option>
			<option value="IN">Indiana</option>
			<option value="IA">Iowa</option>
			<option value="KS">Kansas</option>
			<option value="KY">Kentucky</option>
			<option value="LA">Louisiana</option>
			<option value="ME">Maine</option>
			<option value="MD">Maryland</option>
			<option value="MA">Massachusetts</option>
			<option value="MI">Michigan</option>
			<option value="MN">Minnesota</option>
			<option value="MS">Mississippi</option>
			<option value="MO">Missouri</option>
			<option value="MT">Montana</option>
			<option value="NE">Nebraska</option>
			<option value="NV">Nevada</option>
			<option value="NH">New Hampshire</option>
			<option value="NJ">New Jersey</option>
			<option value="NM">New Mexico</option>
			<option value="NY">New York</option>
			<option value="NC">North Carolina</option>
			<option value="ND">North Dakota</option>
			<option value="OH">Ohio</option>
			<option value="OK">Oklahoma</option>
			<option value="OR">Oregon</option>
			<option value="PA">Pennsylvania</option>
			<option value="RI">Rhode Island</option>
			<option value="SC">South Carolina</option>
			<option value="SD">South Dakota</option>
			<option value="TN">Tennessee</option>
			<option value="TX">Texas</option>
			<option value="UT">Utah</option>
			<option value="VT">Vermont</option>
			<option value="VA">Virginia</option>
			<option value="WA">Washington</option>
			<option value="WV">West Virginia</option>
			<option value="WI">Wisconsin</option>
			<option value="WY">Wyoming</option>
		</select>
	</div>
	-->

</div> <!-- end container -->
@endsection