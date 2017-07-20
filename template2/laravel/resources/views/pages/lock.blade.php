@extends('layouts.pages')

@section('content')
    <div class="row row-table page-wrapper">
       <div class="col-lg-4 col-md-6 col-sm-8 col-xs-12 align-middle">
          <!-- START panel-->
          <div data-toggle="play-animation" data-play="fadeIn" data-offset="0" class="panel widget b0">
             <img src="assets/img/lock-bg.jpg" alt="lock-bg" class="img-responsive" />
             <div class="panel-body">
                <h3 class="text-center">Hello Sarah!</h3>
                <p class="text-center">Please login to unlock your screen.</p>
                <form role="form">
                   <div class="form-group has-feedback">
                      <div class="pull-right">
                         <a href="#" class="text-muted">
                            <small>Forgot your password?</small>
                         </a>
                      </div>
                      <label for="exampleInputPassword1">Password</label>
                      <input id="exampleInputPassword1" type="password" placeholder="Password" class="form-control" />
                      <span class="fa fa-lock form-control-feedback text-muted"></span>
                   </div>
                   <div class="clearfix">
                      <div class="checkbox c-checkbox pull-left">
                         <label>
                            <input type="checkbox" value="" />
                            <span class="fa fa-check"></span>Remember Me</label>
                      </div>
                      <div class="pull-right">
                         <button type="button" class="btn btn-primary">Unlock</button>
                      </div>
                   </div>
                </form>
             </div>
          </div>
          <!-- END panel-->
       </div>
    </div>
@endsection