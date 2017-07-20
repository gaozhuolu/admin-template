@extends('layouts.app')

@section('content')
    <h3>Panels
       <small>Panels can contain almost any kind of element inside</small>
    </h3>
    <!-- START row-->
    <div class="row">
       <div class="col-lg-4">
          <!-- START panel-->
          <div class="panel panel-default">
             <div class="panel-heading">Collapsible Panel
                <a href="#" data-perform="panel-collapse" data-toggle="tooltip" title="Collapse Panel" class="pull-right">
                   <em class="fa fa-minus"></em>
                </a>
             </div>
             <div class="panel-body">
                <p>Panel can be collapsed clicking on the chevron up/down icon on the top right corner</p>
             </div>
             <div class="panel-footer">Panel Footer</div>
          </div>
          <!-- END panel-->
       </div>
       <div class="col-lg-4">
          <!-- START panel-->
          <div class="panel panel-default">
             <div class="panel-heading">Dismissable Panel
                <a href="#" data-perform="panel-dismiss" data-toggle="tooltip" title="Close Panel" class="pull-right">
                   <em class="fa fa-times"></em>
                </a>
             </div>
             <div class="panel-body">
                <p>Panel can be dismissed by clicking on the cross icon icon on the top right corner</p>
             </div>
          </div>
          <!-- END panel-->
       </div>
       <div class="col-lg-4">
          <!-- START panel-->
          <div class="panel panel-default">
             <div class="panel-heading">Initially collapsed Panel
                <a href="#" data-perform="panel-dismiss" data-toggle="tooltip" title="Close Panel" class="pull-right">
                   <em class="fa fa-times"></em>
                </a>
                <a href="#" data-perform="panel-collapse" data-toggle="tooltip" title="Collapse Panel" class="pull-right">
                   <em class="fa fa-plus"></em>
                </a>
             </div>
             <!-- .panel-wrapper is the element to be collapsed-->
             <div class="panel-wrapper collapse">
                <div class="panel-body">
                   <p>Initially collapsed panel has its body wrapped into
                      <code>.panel-body-wrap.collapse</code>
                   </p>
                </div>
                <div class="panel-footer">Panel Footer</div>
             </div>
          </div>
          <!-- END panel-->
       </div>
    </div>
    <!-- END row-->
    <h4 class="page-header">Panel Refresh</h4>
    <!-- START row-->
    <div class="row">
       <div class="col-lg-4">
          <!-- START panel-->
          <div class="panel panel-default panel-demo">
             <div class="panel-heading">Standard Spinner
                <a href="#" data-perform="panel-collapse" data-toggle="tooltip" title="Collapse Panel" class="pull-right">
                   <em class="fa fa-minus"></em>
                </a>
                <a href="#" data-perform="panel-refresh" data-toggle="tooltip" title="Refresh Panel" class="pull-right">
                   <em class="fa fa-refresh"></em>
                </a>
             </div>
             <div class="panel-body">
                <p>Click on the refresh icon to see how it triggers a refresh-event while it shows a spinner</p>
             </div>
          </div>
          <!-- END panel-->
       </div>
       <div class="col-lg-4">
          <!-- START panel-->
          <div class="panel panel-default panel-demo">
             <div class="panel-heading">Custom Spinner
                <a href="#" data-perform="panel-collapse" data-toggle="tooltip" title="Collapse Panel" class="pull-right">
                   <em class="fa fa-minus"></em>
                </a>
                <a href="#" data-perform="panel-refresh" data-spinner="traditional" data-toggle="tooltip" title="Refresh Panel" class="pull-right">
                   <em class="fa fa-refresh"></em>
                </a>
             </div>
             <div class="panel-body">
                <p>Click on the refresh icon to see how it triggers a refresh-event while it shows a spinner</p>
             </div>
          </div>
          <!-- END panel-->
       </div>
       <div class="col-lg-4">
          <!-- START panel-->
          <div class="panel panel-default panel-demo">
             <div class="panel-heading">Another Spinner
                <a href="#" data-perform="panel-collapse" data-toggle="tooltip" title="Collapse Panel" class="pull-right">
                   <em class="fa fa-minus"></em>
                </a>
                <a href="#" data-perform="panel-refresh" data-spinner="line back-and-forth grow" data-toggle="tooltip" title="Refresh Panel" class="pull-right">
                   <em class="fa fa-refresh"></em>
                </a>
             </div>
             <div class="panel-body">
                <p>See the list of allowed spinner at the Spinners page. A real use example is at the chart page.</p>
             </div>
          </div>
          <!-- END panel-->
       </div>
    </div>
    <!-- END row-->
    <h4 class="page-header">Panel Styles</h4>
    <!-- START row-->
    <div class="row">
       <div class="col-lg-4">
          <!-- START panel-->
          <div class="panel panel-default">
             <div class="panel-heading">Default Panel</div>
             <div class="panel-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
             </div>
             <div class="panel-footer">Panel Footer</div>
          </div>
          <!-- END panel-->
       </div>
       <div class="col-lg-4">
          <!-- START panel-->
          <div class="panel panel-primary">
             <div class="panel-heading">Primary Panel</div>
             <div class="panel-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
             </div>
             <div class="panel-footer">Panel Footer</div>
          </div>
          <!-- END panel-->
       </div>
       <div class="col-lg-4">
          <!-- START panel-->
          <div class="panel panel-success">
             <div class="panel-heading">Success Panel</div>
             <div class="panel-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
             </div>
             <div class="panel-footer">Panel Footer</div>
          </div>
          <!-- END panel-->
       </div>
    </div>
    <!-- END row-->
    <!-- START row-->
    <div class="row">
       <div class="col-lg-4">
          <!-- START panel-->
          <div class="panel panel-info">
             <div class="panel-heading">Info Panel</div>
             <div class="panel-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
             </div>
             <div class="panel-footer">Panel Footer</div>
          </div>
          <!-- END panel-->
       </div>
       <div class="col-lg-4">
          <!-- START panel-->
          <div class="panel panel-warning">
             <div class="panel-heading">Warning Panel</div>
             <div class="panel-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
             </div>
             <div class="panel-footer">Panel Footer</div>
          </div>
          <!-- END panel-->
       </div>
       <div class="col-lg-4">
          <!-- START panel-->
          <div class="panel panel-danger">
             <div class="panel-heading">Danger Panel</div>
             <div class="panel-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
             </div>
             <div class="panel-footer">Panel Footer</div>
          </div>
          <!-- END panel-->
       </div>
    </div>
    <!-- END row-->
    <!-- START row-->
    <div class="row">
       <div class="col-lg-12">
          <!-- START panel-->
          <div class="panel panel-default">
             <div class="panel-heading">Collapsible Accordion Panel Group</div>
             <div class="panel-body">
                <div id="accordion" class="panel-group">
                   <!-- START panel-->
                   <div class="panel panel-default">
                      <div class="panel-heading">
                         <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Collapsible Group Item #1</a>
                         </h4>
                      </div>
                      <div id="collapseOne" class="panel-collapse collapse in">
                         <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                      </div>
                   </div>
                   <!-- END panel-->
                   <!-- START panel-->
                   <div class="panel panel-default">
                      <div class="panel-heading">
                         <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Collapsible Group Item #2</a>
                         </h4>
                      </div>
                      <div id="collapseTwo" class="panel-collapse collapse">
                         <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                      </div>
                   </div>
                   <!-- END panel-->
                   <!-- START panel-->
                   <div class="panel panel-default">
                      <div class="panel-heading">
                         <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Collapsible Group Item #3</a>
                         </h4>
                      </div>
                      <div id="collapseThree" class="panel-collapse collapse">
                         <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                      </div>
                   </div>
                   <!-- END panel-->
                </div>
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
             <div class="panel-heading">Basic Tabs</div>
             <div class="panel-body">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs">
                   <li class="active"><a href="#home" data-toggle="tab">Home</a>
                   </li>
                   <li><a href="#profile" data-toggle="tab">Profile</a>
                   </li>
                   <li><a href="#messages" data-toggle="tab">Messages</a>
                   </li>
                   <li><a href="#settings" data-toggle="tab">Settings</a>
                   </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                   <div id="home" class="tab-pane fade in active">
                      <h4>Home Tab</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                         Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                   </div>
                   <div id="profile" class="tab-pane fade">
                      <h4>Profile Tab</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                         Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                   </div>
                   <div id="messages" class="tab-pane fade">
                      <h4>Messages Tab</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                         Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                   </div>
                   <div id="settings" class="tab-pane fade">
                      <h4>Settings Tab</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                         Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                   </div>
                </div>
             </div>
          </div>
          <!-- END panel-->
       </div>
       <div class="col-lg-6">
          <!-- START panel-->
          <div class="panel panel-default">
             <div class="panel-heading">Pill Tabs</div>
             <div class="panel-body">
                <!-- Nav tabs -->
                <ul class="nav nav-pills">
                   <li class="active"><a href="#home-pills" data-toggle="tab">Home</a>
                   </li>
                   <li><a href="#profile-pills" data-toggle="tab">Profile</a>
                   </li>
                   <li><a href="#messages-pills" data-toggle="tab">Messages</a>
                   </li>
                   <li><a href="#settings-pills" data-toggle="tab">Settings</a>
                   </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                   <div id="home-pills" class="tab-pane fade in active">
                      <h4>Home Tab</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                         Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                   </div>
                   <div id="profile-pills" class="tab-pane fade">
                      <h4>Profile Tab</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                         Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                   </div>
                   <div id="messages-pills" class="tab-pane fade">
                      <h4>Messages Tab</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                         Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                   </div>
                   <div id="settings-pills" class="tab-pane fade">
                      <h4>Settings Tab</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                         Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                   </div>
                </div>
             </div>
             <!--/.panel-body -->
          </div>
          <!-- END panel-->
       </div>
    </div>
    <!-- END row-->
    <!-- START row-->
    <div class="row">
       <div class="col-lg-4">
          <div class="well">
             <h4>Normal Well</h4>
             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
          </div>
       </div>
       <div class="col-lg-4">
          <div class="well well-lg">
             <h4>Large Well</h4>
             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
          </div>
       </div>
       <div class="col-lg-4">
          <div class="well well-sm">
             <h4>Small Well</h4>
             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
          </div>
       </div>
    </div>
    <!-- END row-->
    <!-- START row-->
    <div class="row">
       <div class="col-lg-12">
          <div class="jumbotron">
             <div class="container-fluid">
                <h1>Jumbotron</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum
                   tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing.</p>
                <p><a role="button" class="btn btn-primary btn-lg">Learn more</a>
                </p>
             </div>
          </div>
       </div>
    </div>
    <!-- END row-->
@endsection