@extends('layouts.pages')

@section('content')
    <div class="row row-table page-wrapper">
       <div class="col-lg-3 col-md-6 col-sm-8 col-xs-12 align-middle">
          <!-- START panel-->
          <div data-toggle="play-animation" data-play="fadeIn" data-offset="0" class="panel panel-dark panel-flat">
             <div class="panel-heading text-center">
                <a href="#">
                   <img src="assets/img/logo.png" alt="Image" class="block-center img-rounded" />
                </a>
                <p class="text-center mt-lg">
                   <strong>PASSWORD RESET</strong>
                </p>
             </div>
             <div class="panel-body">
                <form role="form">
                   <p class="text-center">Fill with your mail to receive instructions on how to reset your password.</p>
                   <div class="form-group has-feedback">
                      <label for="resetInputEmail1">Email address</label>
                      <input id="resetInputEmail1" type="email" placeholder="Enter email" class="form-control" />
                      <span class="fa fa-envelope form-control-feedback text-muted"></span>
                   </div>
                   <button type="submit" class="btn btn-danger btn-block">Reset</button>
                </form>
             </div>
          </div>
          <!-- END panel-->
       </div>
    </div>
@endsection