@extends('layouts.app')

@section('content')
    <h3>Radial charts
       <small>No canvas &amp; Pure CSS radial progress bars</small>
    </h3>
    <!-- START row-->
    <div class="row">
       <div class="col-lg-6">
          <!-- START panel-->
          <div class="panel panel-default">
             <div class="panel-heading">Radial Size</div>
             <div class="panel-body text-center">
                <div class="row">
                   <div class="col-md-3">
                      <div data-label="85%" class="radial-bar radial-bar-85 radial-bar-lg"></div>
                      <p>
                         <code>.radial-bar.radial-bar-85.radial-bar-lg</code>
                      </p>
                   </div>
                   <div class="col-md-3">
                      <div data-label="45%" class="radial-bar radial-bar-45"></div>
                   </div>
                   <div class="col-md-3">
                      <div data-label="60%" class="radial-bar radial-bar-60 radial-bar-sm"></div>
                   </div>
                   <div class="col-md-3">
                      <div data-label="20%" class="radial-bar radial-bar-20 radial-bar-xs"></div>
                   </div>
                </div>
             </div>
          </div>
          <!-- END panel-->
          <!-- START panel-->
          <div class="panel panel-default">
             <div class="panel-heading">Radial with Images</div>
             <div class="panel-body text-center">
                <div class="row">
                   <div class="col-md-3">
                      <div class="radial-bar radial-bar-20 radial-bar radial-bar-danger">
                         <img src="assets/img/user/03.jpg" alt="Image" />
                      </div>
                   </div>
                   <div class="col-md-3">
                      <div data-label="35%" class="radial-bar radial-bar-35 radial-bar-warning">
                         <img src="assets/img/user/01.jpg" alt="Image" />
                      </div>
                   </div>
                   <div class="col-md-3">
                      <div data-label="50%" class="radial-bar radial-bar-50 radial-bar-info">
                         <img src="assets/img/user/04.jpg" alt="Image" />
                      </div>
                   </div>
                   <div class="col-md-3">
                      <div data-label="100%" class="radial-bar radial-bar-100 radial-bar-success">
                         <img src="assets/img/user/05.jpg" alt="Image" />
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <!-- END panel-->
          <!-- START panel-->
          <div class="panel panel-default">
             <div class="panel-heading">Radial with Tooltips</div>
             <div class="panel-body text-center">
                <div class="row">
                   <div class="col-md-3">
                      <br/>
                      <div data-label="85%" data-toggle="tooltip" data-title="85%" class="radial-bar radial-bar-85"></div>
                   </div>
                   <div class="col-md-3">
                      <br/>
                      <div data-label="45%" data-toggle="tooltip" data-title="45%" class="radial-bar radial-bar-45"></div>
                   </div>
                   <div class="col-md-3">
                      <br/>
                      <div data-label="60%" data-toggle="tooltip" data-title="60%" class="radial-bar radial-bar-60"></div>
                   </div>
                   <div class="col-md-3">
                      <br/>
                      <div data-label="20%" data-toggle="tooltip" data-title="20%" class="radial-bar radial-bar-20"></div>
                   </div>
                </div>
             </div>
          </div>
          <!-- END panel-->
       </div>
       <div class="col-lg-6">
          <!-- START panel-->
          <div class="panel panel-default">
             <div class="panel-heading">Radial Variants</div>
             <div class="panel-body text-center">
                <div class="row">
                   <div class="col-md-3">
                      <div data-label="20%" class="radial-bar radial-bar-20 radial-bar-lg radial-bar-danger"></div>
                      <p>
                         <code>.radial-bar.radial-bar-20.radial-bar-lg.radial-bar-danger</code>
                      </p>
                   </div>
                   <div class="col-md-3">
                      <div data-label="35%" class="radial-bar radial-bar-35 radial-bar-lg radial-bar-warning"></div>
                   </div>
                   <div class="col-md-3">
                      <div data-label="50%" class="radial-bar radial-bar-50 radial-bar-lg radial-bar-info"></div>
                   </div>
                   <div class="col-md-3">
                      <div data-label="100%" class="radial-bar radial-bar-100 radial-bar-lg radial-bar-success"></div>
                   </div>
                </div>
             </div>
          </div>
          <!-- END panel-->
          <!-- START panel-->
          <div class="panel panel-default">
             <div class="panel-heading">Radial applications</div>
             <div class="panel-body text-center">
                <div data-label="85%" class="radial-bar radial-bar-85 radial-bar-lg"></div>
                <p>Visitors</p>
             </div>
             <div class="panel-footer text-center">
                <div class="row">
                   <div class="col-md-4">
                      <div data-label="35%" class="radial-bar radial-bar-35 radial-bar-sm"></div>
                      <p>
                         <small>Conversions</small>
                      </p>
                   </div>
                   <div class="col-md-4">
                      <div data-label="45%" class="radial-bar radial-bar-45 radial-bar-sm"></div>
                      <p>
                         <small>Recurrent</small>
                      </p>
                   </div>
                   <div class="col-md-4">
                      <div data-label="20%" class="radial-bar radial-bar-20 radial-bar-sm"></div>
                      <p>
                         <small>Uniques</small>
                      </p>
                   </div>
                </div>
             </div>
          </div>
          <!-- END panel-->
       </div>
    </div>
    <!-- END row-->
@endsection