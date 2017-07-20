@extends('layouts.app')

@section('content')
    <h3>Notifications
       <small>A complete set of notification posibilities</small>
    </h3>
    <ol class="breadcrumb">
       <li><a href="#">Home</a>
       </li>
       <li><a href="#">Elements</a>
       </li>
       <li class="active">Notifications</li>
    </ol>
    <!-- START row-->
    <div class="row">
       <div class="col-lg-6">
          <!-- START panel-->
          <div class="panel panel-default">
             <div class="panel-heading">Notify Alerts</div>
             <div class="panel-body">
                <p>Create toggleable notifications that fade out automatically.</p>
                <p>
                   <button type="button" data-toggle="notify" data-message="Message .." class="btn btn-default">Message</button>
                </p>
                <p>You can use HTML inside your notification message</p>
                <p>
                   <button type="button" data-toggle="notify" data-message="&lt;em class='fa fa-check'&gt;&lt;/em&gt; Message with icon.." class="btn btn-default">Message with Icon</button>
                </p>
             </div>
          </div>
          <!-- END panel-->
       </div>
       <div class="col-lg-6">
          <!-- START panel-->
          <div class="panel panel-default">
             <div class="panel-heading">Notify with Status</div>
             <div class="panel-body">
                <p>Uses builtin alert status to apply notifications</p>
                <p>
                   <button type="button" data-toggle="notify" data-message="Message with status.." data-options="{&quot;status&quot;:&quot;danger&quot;}" class="btn btn-danger">Danger</button>
                   <button type="button" data-toggle="notify" data-message="Message with status.." data-options="{&quot;status&quot;:&quot;info&quot;}" class="btn btn-info">Info</button>
                   <button type="button" data-toggle="notify" data-message="Message with status.." data-options="{&quot;status&quot;:&quot;warning&quot;}" class="btn btn-warning">Warning</button>
                   <button type="button" data-toggle="notify" data-message="Message with status.." data-options="{&quot;status&quot;:&quot;success&quot;}" class="btn btn-success">Success</button>
                </p>
                <p>Show in different positions</p>
                <p>
                   <button type="button" data-toggle="notify" data-message="Message in position.." data-options="{&quot;pos&quot;:&quot;bottom-center&quot;}" class="btn btn-default">Bottom Cener</button>
                   <button type="button" data-toggle="notify" data-message="Message in position.." data-options="{&quot;pos&quot;:&quot;top-left&quot;}" class="btn btn-default">Top Left</button>
                   <button type="button" data-toggle="notify" data-message="Message in position.." data-options="{&quot;pos&quot;:&quot;top-right&quot;}" class="btn btn-default">Top Right</button>
                   <button type="button" data-toggle="notify" data-message="Message in position.." data-options="{&quot;status&quot;:&quot;success&quot;, &quot;pos&quot;:&quot;bottom-right&quot;}" class="btn btn-default">Succes at Bottom Right</button>
                </p>
             </div>
          </div>
          <!-- END panel-->
       </div>
    </div>
    <!-- END row-->
    <!-- START row-->
    <div class="row">
       <div class="col-lg-6">
          <!-- START panel-->
          <div class="panel panel-default">
             <div class="panel-heading">Alert Styles</div>
             <div class="panel-body">
                <div class="alert alert-success">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="alert-link">Alert Link</a>.</div>
                <div class="alert alert-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="alert-link">Alert Link</a>.</div>
                <div class="alert alert-warning">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="alert-link">Alert Link</a>.</div>
                <div class="alert alert-danger">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="alert-link">Alert Link</a>.</div>
             </div>
             <!--.panel-body -->
          </div>
          <!-- END panel-->
       </div>
       <div class="col-lg-6">
          <!-- START panel-->
          <div class="panel panel-default">
             <div class="panel-heading">Dismissable Alerts</div>
             <div class="panel-body">
                <div class="alert alert-success alert-dismissable">
                   <button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="alert-link">Alert Link</a>.</div>
                <div class="alert alert-info alert-dismissable">
                   <button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="alert-link">Alert Link</a>.</div>
                <div class="alert alert-warning alert-dismissable">
                   <button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="alert-link">Alert Link</a>.</div>
                <div class="alert alert-danger alert-dismissable">
                   <button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <a href="#" class="alert-link">Alert Link</a>.</div>
             </div>
             <!--.panel-body -->
          </div>
          <!-- END panel-->
       </div>
    </div>
    <!-- END row-->
    <!-- START row-->
    <div class="row">
       <div class="col-lg-6">
          <!-- START panel-->
          <div class="panel panel-default">
             <div class="panel-heading">Modals</div>
             <div class="panel-body">
                <!-- Button trigger modal -->
                <button data-toggle="modal" data-target="#myModal" class="btn btn-primary btn-lg">Launch Demo Modal</button>
             </div>
          </div>
          <!-- END panel-->
       </div>
       <div class="col-lg-6">
          <!-- START panel-->
          <div class="panel panel-default">
             <div class="panel-heading">Tooltips and Popovers</div>
             <div class="panel-body">
                <h4>Tooltip Demo</h4>
                <div class="tooltip-demo">
                   <button type="button" data-toggle="tooltip" data-placement="left" title="" data-original-title="Tooltip on left" class="btn btn-default">Tooltip on left</button>
                   <button type="button" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top" class="btn btn-default">Tooltip on top</button>
                   <button type="button" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tooltip on bottom" class="btn btn-default">Tooltip on bottom</button>
                   <button type="button" data-toggle="tooltip" data-placement="right" title="Tooltip on right" class="btn btn-default">Tooltip on right</button>
                </div>
                <br/>
                <h4>Clickable Popover Demo</h4>
                <div class="tooltip-demo">
                   <button type="button" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title="" class="btn btn-default">Popover on left</button>
                   <button type="button" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title="" class="btn btn-default">Popover on top</button>
                   <button type="button" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title="" class="btn btn-default">Popover on bottom</button>
                   <button type="button" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title="" class="btn btn-default">Popover on right</button>
                </div>
             </div>
             <!--.panel-body -->
          </div>
          <!-- END panel-->
       </div>
    </div>
    <!-- END row-->
@endsection