@extends('template.master')
@section('content')


<!-- resources/views/auth/register.blade.php -->

<!-- resources/views/auth/register.blade.php -->


<div class="container white" id="#top">
    <div class="col-xs-12 text-center"><h2>About International Revolving Doors</h2></div>
        <div class="col-xs-10 col-xs-offset-1">
            <p class="text-center col-xs-8 col-xs-offset-2">International Revolving Doors is a company in Evansville, Indiana that makes revolving doors. We have been in exitance for a while and make really awesome revoloving doors</p>
        </div>    
         <div class="col-xs-10 col-xs-offset-1">
 <!-- Timeline Beginning -->
            <ul class="timeline">
        <li>
          <div class="timeline-badge danger">1999</div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">A Date or Title Can Go Here</h4>
            </div>
            <div class="timeline-body">
              <p>Historical Date about IRD</p>
            </div>
          </div>
        </li>
        <li class="timeline-inverted">
          <div class="timeline-badge warning">Date</div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Event</h4>
            </div>
            <div class="timeline-body">
              <p><img class="img-responsive" src="{{ URL::to('images/darth_stw.jpg')}}"></p>
            </div>
          </div>
        </li>

        <li>
          <div class="timeline-badge info">1774</div>
          <div class="timeline-panel">
              <h4 class="timeline-title">This one is clickable</h4>
            <div class="timeline-body">
              <p><img class="img-responsive" src="{{ URL::to('images/cat.png')}}"></p>
              <p class="text-center">  <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#TestModal">
 See more about this cat
                  </button></p>
            </div>
          </div>
        </li>
         <li class="timeline-inverted">
         <div class="timeline-badge warning">2015</div>
            <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">The Future</h4>
            </div>
            <div class="timeline-body">
              <p>IRD will continue to create EPIC revolving doors beyond the future!</p>
            </div>
          </div>
        </li>
               
    </ul>
            
            <!-- Timeline End -->
           <div class="col-xs-12 text-center">
               <a class="btn btn-default" href="#top">Back to the Top</a>
             <br>
             <br>
             </div>
             
            <!-- Modals -->
             <!-- Modal -->
                <!-- First test modal -->    
                    <div class="modal fade" id="TestModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Creepy Cat</h4>
                          </div>
                            <div class="modal-body col-xs-12">
                                <br>
                              <div class="col-xs-4">
                                  <p><img class="img-responsive img-thumbnail" src="{{ URL::to('images/cat.png')}}"></p>
                              </div>
                              <div class="col-xs-8">
                                  <p>Here, we can put more information about the photo that will actually be in the timeline instead of this cat. </p>
                              </div>
                            </div>
                          <div class="modal-footer"> 
                          </div>
                        </div>
                      </div>
                    </div>
            <!-- End of Modals --> 
        </div>

</div>
@endsection
