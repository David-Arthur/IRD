@extends('template.master')
@section('content')
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
            if (polys[i].Contains(point)) {
              var area = polys[i].Area()/1000000;
              var sqmiles = area/2.58998811;
              var T2 = new Date();
              map.openInfoWindowHtml(point,"You clicked on "+x.name+"<br>The area of "+labels[i]+" is "+parseInt(area)
                    +" sq km.<br>that's "+parseInt(sqmiles)+" square miles<br>"
                    +"Its boundary is "+parseInt(polys[i].Distance()/1609.344)+" miles long"
                    +"<hr>Time taken = "+(T2.getTime()-T1.getTime())+" milliseconds"
              );             i = 999; // Jump out of loop
            }
          }
        }
      });
      // Read the data from states.xml
      var request = GXmlHttp.create();
      request.open("GET", "{{URL::to('xml/states.xml')}}", true);
      request.onreadystatechange = function() {
        if (request.readyState == 4) {
          var xmlDoc = GXml.parse(request.responseText);
          // ========= Now process the polylines ===========
          var states = xmlDoc.documentElement.getElementsByTagName("state");
          // read each line
          for (var a = 0; a < states.length; a++) {
            // get any state attributes
            var label  = states[a].getAttribute("name");
            var colour = states[a].getAttribute("colour");
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
@endsection
