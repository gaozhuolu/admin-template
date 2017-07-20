@extends('layouts.app')

@section('content')
    <h3>Widgets</h3>
    <!-- START row-->
    <div class="row">
       <div class="col-lg-3 col-md-6">
          <!-- START panel-->
          <div class="panel panel-primary">
             <div class="panel-heading">
                <div class="row">
                   <div class="col-xs-3">
                      <em class="fa fa-comments fa-5x"></em>
                   </div>
                   <div class="col-xs-9 text-right">
                      <div class="text-lg">26</div>
                      <p class="m0">New Comments!</p>
                   </div>
                </div>
             </div>
             <a href="#" class="panel-footer bg-dark bt0 clearfix btn-block">
                <span class="pull-left">View Details</span>
                <span class="pull-right">
                   <em class="fa fa-chevron-circle-right"></em>
                </span>
             </a>
             <!-- END panel-->
          </div>
       </div>
       <div class="col-lg-3 col-md-6">
          <!-- START panel-->
          <div class="panel panel-green">
             <div class="panel-heading">
                <div class="row">
                   <div class="col-xs-3">
                      <em class="fa fa-tasks fa-5x"></em>
                   </div>
                   <div class="col-xs-9 text-right">
                      <div class="text-lg">12</div>
                      <p class="m0">New Tasks!</p>
                   </div>
                </div>
             </div>
             <a href="#" class="panel-footer bg-dark bt0 clearfix btn-block">
                <span class="pull-left">View Details</span>
                <span class="pull-right">
                   <em class="fa fa-chevron-circle-right"></em>
                </span>
             </a>
          </div>
          <!-- END panel-->
       </div>
       <div class="col-lg-3 col-md-6">
          <!-- START panel-->
          <div class="panel panel-warning">
             <div class="panel-heading">
                <div class="row">
                   <div class="col-xs-3">
                      <em class="fa fa-shopping-cart fa-5x"></em>
                   </div>
                   <div class="col-xs-9 text-right">
                      <div class="text-lg">124</div>
                      <p class="m0">New Orders!</p>
                   </div>
                </div>
             </div>
             <a href="#" class="panel-footer bg-dark bt0 clearfix btn-block">
                <span class="pull-left">View Details</span>
                <span class="pull-right">
                   <em class="fa fa-chevron-circle-right"></em>
                </span>
             </a>
          </div>
          <!-- END panel-->
       </div>
       <div class="col-lg-3 col-md-6">
          <!-- START panel-->
          <div class="panel panel-danger">
             <div class="panel-heading">
                <div class="row">
                   <div class="col-xs-3">
                      <em class="fa fa-support fa-5x"></em>
                   </div>
                   <div class="col-xs-9 text-right">
                      <div class="text-lg">13</div>
                      <p class="m0">Support Tickets!</p>
                   </div>
                </div>
             </div>
             <a href="#" class="panel-footer bg-dark bt0 clearfix btn-block">
                <span class="pull-left">View Details</span>
                <span class="pull-right">
                   <em class="fa fa-chevron-circle-right"></em>
                </span>
             </a>
          </div>
          <!-- END panel-->
       </div>
    </div>
    <!-- END row-->
    <!-- START row-->
    <div class="row">
       <div class="col-lg-4">
          <!-- START widget-->
          <div class="panel widget">
             <div class="row row-table row-flush">
                <div class="col-xs-6 bb br">
                   <div class="row row-table row-flush">
                      <div class="col-xs-4 text-center text-info">
                         <em class="fa fa-users fa-2x"></em>
                      </div>
                      <div class="col-xs-8">
                         <div class="panel-body text-center">
                            <h4 class="mt0">10k</h4>
                            <p class="mb0 text-muted">VISITORS</p>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-xs-6 bb">
                   <div class="row row-table row-flush">
                      <div class="col-xs-4 text-center text-danger">
                         <em class="fa fa-music fa-2x"></em>
                      </div>
                      <div class="col-xs-8">
                         <div class="panel-body text-center">
                            <h4 class="mt0">100%</h4>
                            <p class="mb0 text-muted">VOLUME</p>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <div class="row row-table row-flush">
                <div class="col-xs-6 br">
                   <div class="row row-table row-flush">
                      <div class="col-xs-4 text-center text-inverse">
                         <em class="fa fa-code-fork fa-2x"></em>
                      </div>
                      <div class="col-xs-8">
                         <div class="panel-body text-center">
                            <h4 class="mt0">150</h4>
                            <p class="mb0 text-muted">FORKS</p>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-xs-6">
                   <div class="row row-table row-flush">
                      <div class="col-xs-4 text-center text-success">
                         <em class="fa fa-inbox fa-2x"></em>
                      </div>
                      <div class="col-xs-8">
                         <div class="panel-body text-center">
                            <h4 class="mt0">10</h4>
                            <p class="mb0 text-muted">NEW MESSAGES</p>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <!-- END widget-->
          <!-- START widget-->
          <div class="panel widget">
             <div class="row row-table row-flush">
                <div class="col-xs-6 bb br">
                   <div class="row row-table row-flush">
                      <div class="col-xs-4 text-center text-info">
                         <!-- Bar chart-->
                         <div data-bar-color="primary" data-height="20" data-bar-width="3" data-bar-spacing="2" class="inlinesparkline inline">
                            5,9,4,1,3,4,7,5</div>
                      </div>
                      <div class="col-xs-8">
                         <div class="panel-body text-center">
                            <h4 class="mt0">10k</h4>
                            <p class="mb0 text-muted">VISITORS</p>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-xs-6 bb">
                   <div class="row row-table row-flush">
                      <div class="col-xs-4 text-center text-danger">
                         <!-- Bar chart-->
                         <div data-bar-color="primary" data-height="20" data-bar-width="3" data-bar-spacing="2" class="inlinesparkline inline">
                            1,2,3,4,5,6,7,8,9</div>
                      </div>
                      <div class="col-xs-8">
                         <div class="panel-body text-center">
                            <h4 class="mt0">100%</h4>
                            <p class="mb0 text-muted">CONVERSIONS</p>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <div class="row row-table row-flush">
                <div class="col-xs-6 br">
                   <div class="row row-table row-flush">
                      <div class="col-xs-4 text-center text-inverse">
                         <!-- Bar chart-->
                         <div data-bar-color="primary" data-height="20" data-bar-width="3" data-bar-spacing="2" class="inlinesparkline inline">
                            1,0,4,9,5,7,8,4,7</div>
                      </div>
                      <div class="col-xs-8">
                         <div class="panel-body text-center">
                            <h4 class="mt0">150</h4>
                            <p class="mb0 text-muted">RETURNS</p>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="col-xs-6">
                   <div class="row row-table row-flush">
                      <div class="col-xs-4 text-center text-success">
                         <!-- Bar chart-->
                         <div data-bar-color="primary" data-height="20" data-bar-width="3" data-bar-spacing="2" class="inlinesparkline inline">
                            1,5,2,2,8,4,4,8</div>
                      </div>
                      <div class="col-xs-8">
                         <div class="panel-body text-center">
                            <h4 class="mt0">10</h4>
                            <p class="mb0 text-muted">UNIQUES</p>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <!-- END widget-->
       </div>
       <div class="col-lg-4">
          <!-- START widget-->
          <div class="panel widget">
             <div class="half-float">
                <img src="assets/img/bg3.jpg" alt="" class="img-responsive" />
                <div class="half-float-bottom">
                   <img src="assets/img/user/09.jpg" alt="Image" class="img-thumbnail img-circle thumb128" />
                </div>
             </div>
             <div class="panel-body text-center">
                <h3 class="m0">Laurie Nelson</h3>
                <p class="text-muted">Lead director</p>
                <p>Proin metus justo, commodo in ultrices at, lobortis sit amet dui. Fusce dolor purus, adipiscing a tempus at, gravida vel purus.</p>
             </div>
             <div class="panel-body text-center bg-gray-dark">
                <div class="row row-table">
                   <div class="col-xs-4">
                      <h3 class="m0">400</h3>
                      <p class="m0">Photos</p>
                   </div>
                   <div class="col-xs-4">
                      <h3 class="m0">2000</h3>
                      <p class="m0">Likes</p>
                   </div>
                   <div class="col-xs-4">
                      <h3 class="m0">500</h3>
                      <p class="m0">Following</p>
                   </div>
                </div>
             </div>
          </div>
          <!-- END widget-->
       </div>
       <div class="col-lg-4">
          <!-- START widget-->
          <div class="panel widget">
             <div style="background-image: url('assets/img//bg4.jpg')" class="panel-body text-center bg-center">
                <div class="row row-table">
                   <div class="col-xs-12 text-white">
                      <img src="assets/img/user/06.jpg" alt="Image" class="img-thumbnail img-circle thumb128" />
                      <h3 class="m0">Soham</h3>
                      <p class="m0">
                         <em class="fa fa-twitter fa-fw"></em>@soham</p>
                   </div>
                </div>
             </div>
             <div class="panel-body text-center bg-gray-darker">
                <div class="row row-table">
                   <div class="col-xs-4">
                      <a href="#" class="text-white">
                         <em class="fa fa-twitter fa-2x"></em>
                      </a>
                   </div>
                   <div class="col-xs-4">
                      <a href="#" class="text-white">
                         <em class="fa fa-facebook fa-2x"></em>
                      </a>
                   </div>
                   <div class="col-xs-4">
                      <a href="#" class="text-white">
                         <em class="fa fa-comments fa-2x"></em>
                      </a>
                   </div>
                </div>
             </div>
             <div class="list-group">
                <a href="#" class="list-group-item">
                   <span class="label label-primary pull-right">15</span>
                   <em class="fa fa-fw fa-clock-o text-muted"></em>Recent Activity</a>
                <a href="#" class="list-group-item">
                   <span class="label label-primary pull-right">100</span>
                   <em class="fa fa-fw fa-user text-muted"></em>Following</a>
                <a href="#" class="list-group-item">
                   <span class="label label-primary pull-right">300</span>
                   <em class="fa fa-fw fa-folder-open-o text-muted"></em>Photos</a>
             </div>
          </div>
          <!-- END widget-->
       </div>
    </div>
    <!-- END row-->
    <!-- START row-->
    <div class="row">
       <div class="col-lg-4">
          <!-- START widget-->
          <div class="panel widget">
             <div class="panel-body bg-success">
                <div class="h5 mt0">Received all time</div>
                <!-- Line chart-->
                <span data-type="line" data-height="80" data-width="100%" data-line-width="2" data-line-color="#dddddd" data-spot-color="#bbbbbb" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="3" data-resize="true" class="inlinesparkline sparkline">
                   <!-- 1,3,4,7,5,9,4,4,7,5,9,6,4-->
                </span>
                <!-- Bar chart-->
                <div class="text-center">
                   <div data-bar-color="#fff" data-height="50" data-bar-width="6" data-bar-spacing="6" class="inlinesparkline inline">
                      1,3,4,7,5,9,4,4,7,5,9,6,4</div>
                </div>
             </div>
             <div class="panel-body bg-inverse">
                <div class="row row-table text-center">
                   <div class="col-xs-4">
                      <p class="m0 h3">15080</p>
                      <p class="m0 text-muted">Shot Views</p>
                   </div>
                   <div class="col-xs-4">
                      <p class="m0 h3">12000</p>
                      <p class="m0 text-muted">Likes</p>
                   </div>
                   <div class="col-xs-4">
                      <p class="m0 h3">5100</p>
                      <p class="m0 text-muted">Comments</p>
                   </div>
                </div>
             </div>
          </div>
          <!-- END widget-->
       </div>
       <div class="col-lg-4">
          <!-- START widget-->
          <div class="panel widget">
             <div class="panel-body bg-primary">
                <div class="h5 mt0">Monthly incomes</div>
                <!-- Line chart-->
                <div data-type="line" data-height="80" data-width="100%" data-line-width="2" data-line-color="#dddddd" data-spot-color="#bbbbbb" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="3" data-resize="true" class="inlinesparkline sparkline">
                   <!-- 1,3,4,7,5,9,4,4,7,5,9,6,4-->
                </div>
             </div>
             <div class="panel-body bg-inverse">
                <div class="row text-center">
                   <div class="col-xs-6">
                      <!-- Bar chart-->
                      <div data-bar-color="primary" data-height="30" data-bar-width="6" data-bar-spacing="6" class="inlinesparkline inline">
                         1,3,4,7,5,9,4,4,7,5,9,6,4</div>
                   </div>
                   <div class="col-xs-6">
                      <h4 class="m0">+150</h4>
                      <p class="m0 text-muted">
                         <small>From last month</small>
                      </p>
                   </div>
                </div>
             </div>
             <div class="panel-body">
                <div class="row row-table text-center">
                   <div class="col-xs-6">
                      <div class="p">
                         <p class="m0 text-muted">Gross income</p>
                         <h4 class="m0">12000</h4>
                      </div>
                   </div>
                   <div class="col-xs-6">
                      <div class="p">
                         <p class="m0 text-muted">Net income</p>
                         <h4 class="m0">5100</h4>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <!-- END widget-->
       </div>
       <div class="col-lg-4">
          <!-- START widget-->
          <div class="panel widget">
             <div class="row row-table row-flush">
                <div class="col-xs-8">
                   <img src="assets/img/bg1.jpg" alt="" class="img-responsive" />
                </div>
                <div class="col-xs-4 align-middle bg-info">
                   <div class="text-center">
                      <div class="text-lg mt0">11&deg;</div>
                      <p>Cold</p>
                      <em class="fa fa-sun-o fa-2x"></em>
                   </div>
                </div>
             </div>
          </div>
          <!-- END widget-->
       </div>
    </div>
    <!-- END row-->
    <!-- START row-->
    <div class="row">
       <div class="col-lg-3">
          <!-- START widget-->
          <div class="panel widget">
             <div class="row row-table row-flush">
                <div class="col-xs-4 bg-info text-center">
                   <em class="fa fa-users fa-2x"></em>
                </div>
                <div class="col-xs-8">
                   <div class="panel-body text-center">
                      <h4 class="mt0">10k</h4>
                      <p class="mb0 text-muted">VISITORS</p>
                   </div>
                </div>
             </div>
          </div>
          <!-- END widget-->
       </div>
       <div class="col-lg-3">
          <!-- START widget-->
          <div class="panel widget">
             <div class="row row-table row-flush">
                <div class="col-xs-4 bg-danger text-center">
                   <em class="fa fa-music fa-2x"></em>
                </div>
                <div class="col-xs-8">
                   <div class="panel-body text-center">
                      <h4 class="mt0">100%</h4>
                      <p class="mb0 text-muted">VOLUME</p>
                   </div>
                </div>
             </div>
          </div>
          <!-- END widget-->
       </div>
       <div class="col-lg-3">
          <!-- START widget-->
          <div class="panel widget">
             <div class="row row-table row-flush">
                <div class="col-xs-4 bg-inverse text-center">
                   <em class="fa fa-code-fork fa-2x"></em>
                </div>
                <div class="col-xs-8">
                   <div class="panel-body text-center">
                      <h4 class="mt0">150</h4>
                      <p class="mb0 text-muted">FORKS</p>
                   </div>
                </div>
             </div>
          </div>
          <!-- END widget-->
       </div>
       <div class="col-lg-3">
          <!-- START widget-->
          <div class="panel widget">
             <div class="row row-table row-flush">
                <div class="col-xs-4 bg-green text-center">
                   <em class="fa fa-inbox fa-2x"></em>
                </div>
                <div class="col-xs-8">
                   <div class="panel-body text-center">
                      <h4 class="mt0">10</h4>
                      <p class="mb0 text-muted">NEW MESSAGES</p>
                   </div>
                </div>
             </div>
          </div>
          <!-- END widget-->
       </div>
    </div>
    <!-- END row-->
    <!-- START row-->
    <div class="row">
       <div class="col-lg-4">
          <!-- START widget-->
          <div class="panel widget">
             <div class="row row-table row-flush">
                <div class="col-xs-5">
                   <picture class="lateral-picture">
                      <img src="assets/img/bg2.jpg" alt="" />
                   </picture>
                </div>
                <div class="col-xs-7 align-middle p-lg">
                   <div class="pull-right"><a href="#" class="btn btn-primary btn-sm">Register</a>
                   </div>
                   <p>
                      <span class="text-lg">16</span>Aug</p>
                   <p>
                      <strong>EVENT INVITATION</strong>
                   </p>
                   <p>Donec posuere neque in elit luctus tempor consequat enim egestas. Nulla dictum egestas leo at lobortis.</p>
                </div>
             </div>
          </div>
          <!-- END widget-->
       </div>
       <div class="col-lg-4">
          <!-- START widget-->
          <div class="panel widget">
             <div class="panel-body bg-danger text-center">
                <div class="clearfix">
                   <div class="pull-left">200 Following</div>
                   <div class="pull-right">150 Followers</div>
                </div>
                <img src="assets/img/user/06.jpg" alt="Image" class="img-thumbnail img-circle thumb96" />
                <h4 class="mt0">Olivia Ford</h4>
                <p class="m0">
                   <em class="fa fa-fw fa-map-marker"></em>San Francisco, California</p>
                <div class="clearfix">
                   <div class="pull-left">15k Likes</div>
                   <div class="pull-right">100 Feeds</div>
                </div>
             </div>
          </div>
          <!-- END widget-->
       </div>
       <div class="col-lg-4">
          <!-- START widget-->
          <div class="panel widget">
             <div data-zoom="14" data-address="276 N TUSTIN ST, ORANGE, CA 92867" data-toggle="gmap" class="gmap gmap-sm"></div>
             <div class="panel-body bg-inverse">
                <div class="row row-table">
                   <div class="col-xs-6">
                      <div class="h2 m0">Find Us!</div>
                   </div>
                   <div class="col-xs-1">
                      <em class="fa fa-map-marker fa-3x"></em>
                   </div>
                   <div class="col-xs-5">
                      <p class="m0">Street 123</p>
                      <p class="m0">Location, Unknow</p>
                   </div>
                </div>
             </div>
          </div>
          <!-- END widget-->
       </div>
    </div>
    <!-- END row-->
    <!-- START row-->
    <div class="row">
       <div class="col-lg-4">
          <!-- START widget-->
          <div class="panel widget">
             <img src="assets/img/bg1.jpg" alt="Image" class="img-responsive" />
             <div class="panel-body">
                <div class="row row-table text-center">
                   <div class="col-xs-4">
                      <p>Comments</p>
                      <h3 class="m0 text-primary">700</h3>
                   </div>
                   <div class="col-xs-4">
                      <p>Likes</p>
                      <h3 class="m0 text-primary">1500</h3>
                   </div>
                   <div class="col-xs-4">
                      <p>Shots</p>
                      <h3 class="m0 text-primary">300</h3>
                   </div>
                </div>
             </div>
          </div>
          <!-- END widget-->
       </div>
       <div class="col-lg-4">
          <!-- START widget-->
          <div class="panel widget">
             <div class="panel-body">
                <div class="media p mt0">
                   <div class="pull-left">
                      <img src="assets/img/user/09.jpg" alt="Image" class="media-object img-circle thumb96" />
                   </div>
                   <div class="media-body">
                      <div class="media-heading">
                         <h3 class="mt0">Jack Ortiz</h3>
                         <ul class="list-unstyled">
                            <li class="mb-sm">
                               <em class="fa fa-map-marker fa-fw"></em>ASD, Qwerty</li>
                            <li class="mb-sm">
                               <em class="fa fa-twitter fa-fw"></em>@asdasd</li>
                            <li class="mb-sm">
                               <em class="fa fa-envelope fa-fw"></em>asdasd@mail.com</li>
                         </ul>
                      </div>
                   </div>
                </div>
             </div>
             <div class="panel-body bg-inverse">
                <div class="row row-table text-center">
                   <div class="col-xs-4">
                      <p class="m0 h3">700</p>
                      <p class="m0 text-muted">Followers</p>
                   </div>
                   <div class="col-xs-4">
                      <p class="m0 h3">1500</p>
                      <p class="m0 text-muted">Following</p>
                   </div>
                   <div class="col-xs-4">
                      <p class="m0 h3">510</p>
                      <p class="m0 text-muted">Loved</p>
                   </div>
                </div>
             </div>
          </div>
          <!-- END widget-->
          <!-- START widget-->
          <div class="panel widget">
             <div class="panel-body">
                <div class="row row-table">
                   <div class="col-xs-4 text-center">
                      <img src="assets/img/user/06.jpg" alt="Image" class="img-thumbnail img-circle img-responsive thumb96" />
                   </div>
                   <div class="col-xs-8">
                      <div class="pull-right"><a href="#" class="btn btn-success">Follow</a>
                      </div>
                      <h3 class="mt0">Gwendolyn Price</h3>
                      <p class="text-muted">150 Following / 100 Followers</p>
                   </div>
                </div>
             </div>
          </div>
          <!-- END widget-->
       </div>
       <div class="col-lg-4">
          <div class="row">
             <div class="col-sm-6">
                <!-- START widget-->
                <div class="panel widget">
                   <div class="panel-body bg-info text-center">
                      <div class="text-lg m0">300</div>
                      <p>Re-Tweets</p>
                      <div class="mb-lg"></div>
                      <em class="fa fa-twitter text-alpha"></em>
                   </div>
                </div>
                <!-- END widget-->
             </div>
             <div class="col-sm-6">
                <!-- START widget-->
                <div class="panel widget">
                   <div class="panel-body bg-primary text-center">
                      <div class="text-lg m0">12&deg;</div>
                      <p>Bariloche</p>
                      <div class="mb-lg"></div>
                      <em class="fa fa-sun-o"></em>
                   </div>
                </div>
                <!-- END widget-->
             </div>
          </div>
          <div class="row">
             <div class="col-sm-6">
                <!-- START widget-->
                <div class="panel widget">
                   <div class="panel-body bg-danger text-center">
                      <div class="radial-bar radial-bar-40 radial-bar radial-bar-danger m0">
                         <img src="assets/img/user/03.jpg" alt="" />
                      </div>
                      <p>
                         <strong>40%</strong>
                         <span>complete</span>
                      </p>
                   </div>
                </div>
                <!-- END widget-->
             </div>
             <div class="col-sm-6">
                <!-- START widget-->
                <div class="panel widget">
                   <div class="panel-body bg-purple text-center">
                      <p>
                         <img src="assets/img/user/08.jpg" alt="" class="img-rounded thumb64" />
                      </p>
                      <p>
                         <strong>Charlie Warren</strong>
                         <span>is now following you</span>
                      </p>
                   </div>
                </div>
                <!-- END widget-->
             </div>
          </div>
          <div class="row"></div>
          <!-- START widget-->
          <div class="panel widget">
             <div class="panel-body">
                <div class="row row-table">
                   <div class="col-xs-3 text-center">
                      <img src="assets/img/user/06.jpg" alt="Image" class="img-thumbnail img-circle img-responsive thumb64" />
                   </div>
                   <div class="col-xs-5 text-center">
                      <h3 class="m0">Liam Reid</h3>
                   </div>
                   <div class="col-xs-4">
                      <a href="#" class="btn btn-purple">
                         <em class="fa fa-hand-o-right"></em>
                         <span>Touch</span>
                      </a>
                   </div>
                </div>
             </div>
          </div>
          <!-- END widget-->
       </div>
    </div>
    <!-- END row-->
    <!-- START row-->
    <div class="row">
       <div class="col-md-6">
          <!-- START panel-->
          <div class="panel panel-default">
             <div class="panel-heading">
                <h3 class="panel-title">
                   <em class="fa fa-clock-o fa-fw"></em>Tasks Panel</h3>
             </div>
             <div class="panel-body">
                <!-- START list group-->
                <div class="list-group">
                   <a href="#" class="list-group-item">
                      <span class="label label-purple pull-right">just now</span>
                      <em class="fa fa-fw fa-calendar mr"></em>Calendar updated</a>
                   <a href="#" class="list-group-item">
                      <span class="label label-purple pull-right">4 minutes ago</span>
                      <em class="fa fa-fw fa-comment mr"></em>Commented on a post</a>
                   <a href="#" class="list-group-item">
                      <span class="label label-purple pull-right">23 minutes ago</span>
                      <em class="fa fa-fw fa-truck mr"></em>Order 392 shipped</a>
                   <a href="#" class="list-group-item">
                      <span class="label label-purple pull-right">46 minutes ago</span>
                      <em class="fa fa-fw fa-money mr"></em>Invoice 653 has been paid</a>
                   <a href="#" class="list-group-item">
                      <span class="label label-purple pull-right">1 hour ago</span>
                      <em class="fa fa-fw fa-user mr"></em>A new user has been added</a>
                   <a href="#" class="list-group-item">
                      <span class="label label-purple pull-right">2 hours ago</span>
                      <em class="fa fa-fw fa-check mr"></em>Completed task: "pick up dry cleaning"</a>
                   <a href="#" class="list-group-item">
                      <span class="label label-purple pull-right">yesterday</span>
                      <em class="fa fa-fw fa-globe mr"></em>Saved the world</a>
                   <a href="#" class="list-group-item">
                      <span class="label label-purple pull-right">two days ago</span>
                      <em class="fa fa-fw fa-check mr"></em>Completed task: "fix error on sales page"</a>
                </div>
                <!-- END list group-->
             </div>
             <div class="panel-footer text-right"><a href="#" class="btn btn-default btn-sm">View All Activity </a>
             </div>
          </div>
          <!-- END panel-->
       </div>
       <div class="col-md-6">
          <!-- START panel-->
          <div class="panel panel-default">
             <div class="panel-heading">
                <h3 class="panel-title">
                   <em class="fa fa-money fa-fw"></em>Transactions Panel</h3>
             </div>
             <div class="panel-body">
                <!-- START table responsive-->
                <div class="table-responsive">
                   <table class="table table-bordered table-hover table-striped">
                      <thead>
                         <tr>
                            <th>Order #</th>
                            <th>Order Date</th>
                            <th>Order Time</th>
                            <th>Amount (USD)</th>
                         </tr>
                      </thead>
                      <tbody>
                         <tr>
                            <td>3326</td>
                            <td>10/21/2013</td>
                            <td>3:29 PM</td>
                            <td>$321.33</td>
                         </tr>
                         <tr>
                            <td>3325</td>
                            <td>10/21/2013</td>
                            <td>3:20 PM</td>
                            <td>$234.34</td>
                         </tr>
                         <tr>
                            <td>3324</td>
                            <td>10/21/2013</td>
                            <td>3:03 PM</td>
                            <td>$724.17</td>
                         </tr>
                         <tr>
                            <td>3323</td>
                            <td>10/21/2013</td>
                            <td>3:00 PM</td>
                            <td>$23.71</td>
                         </tr>
                         <tr>
                            <td>3322</td>
                            <td>10/21/2013</td>
                            <td>2:49 PM</td>
                            <td>$8345.23</td>
                         </tr>
                         <tr>
                            <td>3321</td>
                            <td>10/21/2013</td>
                            <td>2:23 PM</td>
                            <td>$245.12</td>
                         </tr>
                         <tr>
                            <td>3320</td>
                            <td>10/21/2013</td>
                            <td>2:15 PM</td>
                            <td>$5663.54</td>
                         </tr>
                         <tr>
                            <td>3319</td>
                            <td>10/21/2013</td>
                            <td>2:13 PM</td>
                            <td>$943.45</td>
                         </tr>
                      </tbody>
                   </table>
                </div>
                <!-- END table responsive-->
             </div>
             <div class="panel-footer text-right"><a href="#" class="btn btn-default btn-sm">View All Transactions</a>
             </div>
          </div>
          <!-- END panel-->
       </div>
    </div>
    <!-- END row-->

@endsection
