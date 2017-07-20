@extends('layouts.app')

@section('content')
    <h3>Form Wizards</h3>
    <div id="wizard-standard">
       <h1>Step One</h1>
       <div class="step-content">
          <h2>Title for Step One</h2>
          <p>Duis et orci vitae nunc ultricies tempor a quis arcu.</p>
       </div>
       <h1>Step Two</h1>
       <div class="step-content">
          <h2>Title for Step Two</h2>
          <p>Duis et orci vitae nunc ultricies tempor a quis arcu.</p>
       </div>
       <h1>Step Tree</h1>
       <div class="step-content">
          <h2>Title for Step Tree</h2>
          <p>Duis et orci vitae nunc ultricies tempor a quis arcu.</p>
       </div>
    </div>
    <h4 class="page-header">Wizard with validation</h4>
    <form id="form-wizard-validate" action="#" class="wizard-content-lg">
       <h1>Account</h1>
       <fieldset class="step-content">
          <h4 class="page-header">Account Information</h4>
          <div class="row">
             <div class="col-lg-4">
                <div class="form-group">
                   <label>Username *</label>
                   <input id="userName" name="userName" type="text" class="form-control required" />
                </div>
             </div>
             <div class="col-lg-4">
                <div class="form-group">
                   <label>Password *</label>
                   <input id="password" name="password" type="text" class="form-control required" />
                </div>
             </div>
             <div class="col-lg-4">
                <div class="form-group">
                   <label>Confirm Password *</label>
                   <input id="confirm" name="confirm" type="text" class="form-control required" />
                </div>
             </div>
          </div>
       </fieldset>
       <h1>Profile</h1>
       <fieldset class="step-content">
          <h4 class="page-header">Profile Information</h4>
          <div class="row">
             <div class="col-lg-6">
                <div class="form-group">
                   <label>First name *</label>
                   <input id="name" name="name" type="text" class="form-control required" />
                </div>
                <div class="form-group">
                   <label>Last name *</label>
                   <input id="surname" name="surname" type="text" class="form-control required" />
                </div>
             </div>
             <div class="col-lg-6">
                <div class="form-group">
                   <label>Email *</label>
                   <input id="email" name="email" type="text" class="form-control required email" />
                </div>
                <div class="form-group">
                   <label>Address *</label>
                   <input id="address" name="address" type="text" class="form-control" />
                </div>
             </div>
          </div>
       </fieldset>
       <h1>Warning</h1>
       <fieldset class="step-content">
          <div class="text-center">
             <h2 class="text-center">You're almost done!
                <br/>
                <small>Just one click more</small>
             </h2>
          </div>
       </fieldset>
       <h1>Finish</h1>
       <fieldset class="step-content">
          <h4 class="page-header">Please accept some terms</h4>
          <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required" />
          <label for="acceptTerms">I agree with the Terms and Conditions.</label>
       </fieldset>
    </form>
@endsection