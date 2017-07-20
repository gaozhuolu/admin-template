@extends('layouts.app')

@section('content')
    <div class="btn-group pull-right">
       <button type="button" data-toggle="reset" data-key="panelState" class="btn btn-default btn-sm">Reset Panels</button>
       <button type="button" data-toggle="reset" data-key="portletState" class="btn btn-default btn-sm">Reset Porlets</button>
    </div>
    <h3>Portlets
       <small>Drag and collapse panels. Refresh and see how their state is automatically saved</small>
    </h3>
    <!-- START row-->
    <div class="row">
       <div id="portlet-1" data-toggle="portlet" class="col-lg-4">
          <!-- START panel-->
          <div id="panel-1" class="panel panel-default">
             <div class="panel-heading portlet-handler">Default Panel
                <a href="#" data-perform="panel-collapse" data-toggle="tooltip" title="Collapse Panel" class="pull-right">
                   <em class="fa fa-minus"></em>
                </a>
             </div>
             <div class="panel-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
             </div>
             <div class="panel-footer">Panel Footer</div>
          </div>
          <!-- END panel-->
          <!-- START panel-->
          <div id="panel-2" class="panel panel-primary">
             <div class="panel-heading portlet-handler">Primary Panel
                <a href="#" data-perform="panel-collapse" data-toggle="tooltip" title="Collapse Panel" class="pull-right">
                   <em class="fa fa-minus"></em>
                </a>
             </div>
             <div class="panel-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
             </div>
             <div class="panel-footer">Panel Footer</div>
          </div>
          <!-- END panel-->
          <!-- START panel-->
          <div id="panel-3" class="panel panel-success">
             <div class="panel-heading portlet-handler">Success Panel</div>
             <div class="panel-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
             </div>
             <div class="panel-footer">Panel Footer</div>
          </div>
          <!-- END panel-->
          <!-- START widget-->
          <div id="panel-4" class="panel widget">
             <div class="portlet-handler">
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
          </div>
          <!-- END widget-->
          <!-- START widget-->
          <div id="panel-5" class="panel widget">
             <div class="portlet-handler">
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
          </div>
          <!-- END widget-->
       </div>
       <div id="portlet-2" data-toggle="portlet" class="col-lg-4">
          <!-- START panel-->
          <div id="panel-6" class="panel panel-info">
             <div class="panel-heading portlet-handler">Info Panel</div>
             <div class="panel-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
             </div>
             <div class="panel-footer">Panel Footer</div>
          </div>
          <!-- END panel-->
          <!-- START panel-->
          <div id="panel-7" class="panel panel-warning">
             <div class="panel-heading portlet-handler">Warning Panel</div>
             <div class="panel-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
             </div>
             <div class="panel-footer">Panel Footer</div>
          </div>
          <!-- END panel-->
          <!-- START panel-->
          <div id="panel-8" class="panel panel-danger">
             <div class="panel-heading portlet-handler">Danger Panel</div>
             <div class="panel-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
             </div>
             <div class="panel-footer">Panel Footer</div>
          </div>
          <!-- END panel-->
          <!-- START widget-->
          <div id="panel-9" class="panel widget">
             <div class="portlet-handler">
                <div class="row row-table row-flush">
                   <div class="col-xs-12">
                      <div class="panel-body text-center bg-purple">
                         <h4 class="mt0">10k</h4>
                         <p class="mb0 text-white">VISITORS</p>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <!-- END widget-->
          <!-- START widget-->
          <div id="panel-10" class="panel widget">
             <div class="portlet-handler">
                <div class="row row-table row-flush">
                   <div class="col-xs-12">
                      <div class="panel-body text-center bg-pink">
                         <h4 class="mt0">100%</h4>
                         <p class="mb0 text-white">VOLUME</p>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <!-- END widget-->
       </div>
       <div id="portlet-3" data-toggle="portlet" class="col-lg-4">
          <!-- START panel-->
          <div id="panel-11" class="panel panel-inverse">
             <div class="panel-heading portlet-handler">Inverse Panel</div>
             <div class="panel-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
             </div>
             <div class="panel-footer">Panel Footer</div>
          </div>
          <!-- END panel-->
          <!-- START panel-->
          <div id="panel-12" class="panel panel-purple">
             <div class="panel-heading portlet-handler">Purple Panel</div>
             <div class="panel-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
             </div>
             <div class="panel-footer">Panel Footer</div>
          </div>
          <!-- END panel-->
          <!-- START panel-->
          <div id="panel-13" class="panel panel-green">
             <div class="panel-heading portlet-handler">Green Panel</div>
             <div class="panel-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
             </div>
             <div class="panel-footer">Panel Footer</div>
          </div>
          <!-- END panel-->
          <!-- START widget-->
          <div id="panel-14" class="panel widget">
             <div class="portlet-handler">
                <div class="row row-table row-flush">
                   <div class="col-xs-12">
                      <div class="panel-body text-center bg-green">
                         <h4 class="mt0">150</h4>
                         <p class="mb0 text-white">FORKS</p>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <!-- END widget-->
          <!-- START widget-->
          <div id="panel-15" class="panel widget">
             <div class="portlet-handler">
                <div class="row row-table row-flush">
                   <div class="col-xs-12">
                      <div class="panel-body text-center bg-primary">
                         <h4 class="mt0">10</h4>
                         <p class="mb0 text-white">NEW MESSAGES</p>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <!-- END widget-->
       </div>
    </div>
    <!-- END row-->
@endsection