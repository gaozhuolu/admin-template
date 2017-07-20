@extends('layouts.pages')

@section('content')
    <div class="row row-table page-wrapper">
       <div class="col-lg-3 col-md-6 col-sm-8 col-xs-12 align-middle">
          <!-- START panel-->
          <div data-toggle="play-animation" data-play="fadeIn" data-offset="0" class="panel panel-dark panel-flat">
             <div class="panel-heading text-center mb-lg">
                <a href="#">
                   <img src="assets/img/logo.png" alt="Image" class="block-center img-rounded" />
                </a>
                <p class="text-center mt-lg">
                   <strong>SIGNUP TO GET INSTANT ACCESS.</strong>
                </p>
             </div>
             <div class="panel-body">
                <form role="form">
                   <div class="form-group has-feedback">
                      <label for="signupInputEmail1" class="text-muted">Email address</label>
                      <input id="signupInputEmail1" type="email" placeholder="Enter email" class="form-control" />
                      <span class="fa fa-envelope form-control-feedback text-muted"></span>
                   </div>
                   <div class="form-group has-feedback">
                      <label for="signupInputPassword1" class="text-muted">Password</label>
                      <input id="signupInputPassword1" type="password" placeholder="Password" class="form-control" />
                      <span class="fa fa-lock form-control-feedback text-muted"></span>
                   </div>
                   <div class="form-group has-feedback">
                      <label for="signupInputRePassword1" class="text-muted">Retype Password</label>
                      <input id="signupInputRePassword1" type="password" placeholder="Retype Password" class="form-control" />
                      <span class="fa fa-lock form-control-feedback text-muted"></span>
                   </div>
                   <div class="clearfix">
                      <div class="checkbox c-checkbox pull-left mt0">
                         <label>
                            <input type="checkbox" value="" />
                            <span class="fa fa-check"></span>I agree with the <a href="#">terms</a>
                         </label>
                      </div>
                   </div>
                   <button type="submit" class="btn btn-block btn-primary">Register</button>
                </form>
             </div>
          </div>
          <!-- END panel-->
       </div>
    </div>
@endsection