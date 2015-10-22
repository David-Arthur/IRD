<footer>
    <div class="foot">
        <div class="container">
            <div class="col-xs-8">
                <h4>International Revolving Doors is a division of the IRD Group, INC</h4>
                <p>2138 North Sixth Avenue, Evansville, IN. 47710<strong>812-425-3311</strong></p>
            </div>   
            <div class="col-xs-4 text-right ">
                <h4>&copy;2015 International Revolving Door</h4>
                <!-- IF USER IS NOT LOGGED -->
                @if (!Auth::check())
                <a href="{{ URL::to('auth/login') }}" class="btn btn-primary btn-xs active log-in-button" role="button">Log-In</a>
                <!-- IF USER IS LOGGED -->
                @else
                <a href="{{ URL::to('auth/logout') }}" class="btn btn-primary btn-xs active log-in-button" role="button">Log-Out</a>
                @endif
            </div>
        </div>
    </div>                   
</footer> 
    
</div> <!-- End Container -->    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
