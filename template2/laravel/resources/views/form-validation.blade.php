@extends('layouts.app')

@section('content')
    <h3>Form Validation
       <small>Validating forms frontend have never been so powerful and easy.</small>
    </h3>
    <!-- START row-->
    <div class="row">
       <div class="col-lg-6">
          <form method="post" action="#" data-parsley-validate="" novalidate="">
             <!-- START panel-->
             <div class="panel panel-default">
                <div class="panel-heading">
                   <div class="panel-title">Form Register</div>
                </div>
                <div class="panel-body">
                   <div class="form-group">
                      <label class="control-label">Email Address *</label>
                      <input type="text" name="email" required="required" class="form-control" />
                   </div>
                   <div class="form-group">
                      <label class="control-label">Password *</label>
                      <input id="id-password" type="password" name="password" required="required" class="form-control" />
                   </div>
                   <div class="form-group">
                      <label class="control-label">Confirm Password *</label>
                      <input type="password" name="confirmPassword" required="required" data-parsley-equalto="#id-password" class="form-control" />
                   </div>
                   <div class="required">* Required fields</div>
                </div>
                <div class="panel-footer">
                   <div class="clearfix">
                      <div class="pull-left">
                         <div class="checkbox c-checkbox">
                            <label>
                               <input type="checkbox" name="agreements" required="required" data-parsley-error-message="Please read and agree the terms" />
                               <span class="fa fa-check"></span>I agree with the <a href="#">terms</a>
                            </label>
                         </div>
                      </div>
                      <div class="pull-right">
                         <button type="submit" class="btn btn-primary">Register</button>
                      </div>
                   </div>
                </div>
             </div>
             <!-- END panel-->
          </form>
       </div>
       <div class="col-lg-6">
          <form method="post" data-parsley-validate="" novalidate="">
             <!-- START panel-->
             <div class="panel panel-default">
                <div class="panel-heading">
                   <div class="panel-title">Form Login</div>
                </div>
                <div class="panel-body">
                   <div class="form-group">
                      <label class="control-label">Email Address *</label>
                      <input type="text" name="email" required="required" class="form-control" />
                   </div>
                   <div class="form-group">
                      <label class="control-label">Password *</label>
                      <input type="password" name="password" required="required" class="form-control" />
                   </div>
                   <div class="required">* Required fields</div>
                </div>
                <div class="panel-footer">
                   <button type="submit" class="btn btn-primary">Login</button>
                </div>
             </div>
             <!-- END panel-->
          </form>
       </div>
    </div>
    <!-- END row-->
    <!-- START row-->
    <div class="row">
       <div class="col-md-12">
          <form action="#" data-parsley-validate="" novalidate="" class="form-horizontal">
             <!-- START panel-->
             <div class="panel panel-default">
                <div class="panel-heading">
                   <div class="panel-title">Fields validation</div>
                </div>
                <div class="panel-body">
                   <h4>Type validation</h4>
                   <fieldset>
                      <div class="form-group">
                         <label class="col-sm-2 control-label">Required Text</label>
                         <div class="col-sm-6">
                            <input type="text" name="required" required="required" class="form-control" />
                         </div>
                         <div class="col-sm-4">
                            <code>required</code>
                         </div>
                      </div>
                   </fieldset>
                   <fieldset>
                      <div class="form-group">
                         <label class="col-sm-2 control-label">Email</label>
                         <div class="col-sm-6">
                            <input type="email" name="email" data-parsley-type="email" class="form-control" />
                         </div>
                         <div class="col-sm-4">
                            <code>data-parsley-type="email"</code>
                         </div>
                      </div>
                   </fieldset>
                   <fieldset>
                      <div class="form-group">
                         <label class="col-sm-2 control-label">Number</label>
                         <div class="col-sm-6">
                            <input type="text" name="number" data-parsley-type="number" class="form-control" />
                         </div>
                         <div class="col-sm-4">
                            <code>data-parsley-type="number"</code>
                         </div>
                      </div>
                   </fieldset>
                   <fieldset>
                      <div class="form-group">
                         <label class="col-sm-2 control-label">Integer</label>
                         <div class="col-sm-6">
                            <input type="text" name="integer" data-parsley-type="integer" class="form-control" />
                         </div>
                         <div class="col-sm-4">
                            <code>data-parsley-type="integer"</code>
                         </div>
                      </div>
                   </fieldset>
                   <fieldset>
                      <div class="form-group">
                         <label class="col-sm-2 control-label">Digits</label>
                         <div class="col-sm-6">
                            <input type="text" name="digits" data-parsley-type="digits" class="form-control" />
                         </div>
                         <div class="col-sm-4">
                            <code>data-parsley-type="digits"</code>
                         </div>
                      </div>
                   </fieldset>
                   <fieldset>
                      <div class="form-group">
                         <label class="col-sm-2 control-label">Alphanum</label>
                         <div class="col-sm-6">
                            <input type="text" name="alphanum" data-parsley-type="alphanum" class="form-control" />
                         </div>
                         <div class="col-sm-4">
                            <code>data-parsley-type="alphanum"</code>
                         </div>
                      </div>
                   </fieldset>
                   <fieldset>
                      <div class="form-group">
                         <label class="col-sm-2 control-label">Url</label>
                         <div class="col-sm-6">
                            <input type="text" name="url" data-parsley-type="url" class="form-control" />
                         </div>
                         <div class="col-sm-4">
                            <code>data-parsley-type="url"</code>
                         </div>
                      </div>
                   </fieldset>
                   <fieldset>
                      <div class="form-group">
                         <label class="col-sm-2 control-label">Equal to</label>
                         <div class="col-sm-3">
                            <input id="id-source" type="text" placeholder="#id-source" class="form-control" />
                         </div>
                         <div class="col-sm-3">
                            <input type="text" data-parsley-equalto="#id-source" class="form-control" />
                         </div>
                         <div class="col-sm-4">
                            <code>data-parsley-equalto='#id-source'</code>
                         </div>
                      </div>
                   </fieldset>
                   <h4>Range validation</h4>
                   <fieldset>
                      <div class="form-group">
                         <label class="col-sm-2 control-label">Minlength</label>
                         <div class="col-sm-6">
                            <input type="text" name="minlength" data-parsley-minlength="6" class="form-control" />
                         </div>
                         <div class="col-sm-4">
                            <code>data-parsley-minlength="6"</code>
                         </div>
                      </div>
                   </fieldset>
                   <fieldset>
                      <div class="form-group">
                         <label class="col-sm-2 control-label">Maxlength</label>
                         <div class="col-sm-6">
                            <input type="text" name="maxlength" data-parsley-maxlength="10" class="form-control" />
                         </div>
                         <div class="col-sm-4">
                            <code>data-parsley-maxlength="10"</code>
                         </div>
                      </div>
                   </fieldset>
                   <fieldset>
                      <div class="form-group">
                         <label class="col-sm-2 control-label">Length</label>
                         <div class="col-sm-6">
                            <input type="text" name="length" data-parsley-length="[6, 10]" class="form-control" />
                         </div>
                         <div class="col-sm-4">
                            <code>data-parsley-length="[6, 10]"</code>
                         </div>
                      </div>
                   </fieldset>
                   <fieldset>
                      <div class="form-group">
                         <label class="col-sm-2 control-label">Min</label>
                         <div class="col-sm-6">
                            <input type="text" name="min" data-parsley-min="6" class="form-control" />
                         </div>
                         <div class="col-sm-4">
                            <code>data-parsley-min="6"</code>
                         </div>
                      </div>
                   </fieldset>
                   <fieldset>
                      <div class="form-group">
                         <label class="col-sm-2 control-label">Max</label>
                         <div class="col-sm-6">
                            <input type="text" name="max" data-parsley-max="6" class="form-control" />
                         </div>
                         <div class="col-sm-4">
                            <code>data-parsley-max="6"</code>
                         </div>
                      </div>
                   </fieldset>
                   <fieldset>
                      <div class="form-group">
                         <label class="col-sm-2 control-label">Min words</label>
                         <div class="col-sm-6">
                            <input type="text" data-minwords="6" class="form-control" />
                         </div>
                         <div class="col-sm-4">
                            <code>data-minwords='6'</code>
                         </div>
                      </div>
                   </fieldset>
                   <fieldset>
                      <div class="form-group">
                         <label class="col-sm-2 control-label">Max words</label>
                         <div class="col-sm-6">
                            <input type="text" data-maxwords="6" class="form-control" />
                         </div>
                         <div class="col-sm-4">
                            <code>data-maxwords='6'</code>
                         </div>
                      </div>
                   </fieldset>
                   <fieldset>
                      <div class="form-group">
                         <label class="col-sm-2 control-label">Range of words</label>
                         <div class="col-sm-6">
                            <input type="text" data-rangewords="[6,10]" class="form-control" />
                         </div>
                         <div class="col-sm-4">
                            <code>data-rangewords='[6,10]'</code>
                         </div>
                      </div>
                   </fieldset>
                </div>
                <div class="panel-footer text-center">
                   <button type="submit" class="btn btn-info">Run validation</button>
                </div>
             </div>
             <!-- END panel-->
          </form>
       </div>
    </div>
    <!-- END row-->
@endsection