@extends('layouts.app')

@section('content')
    <h3>
       <div class="pull-right text-center">
          <div data-bar-color="#cfdbe2" data-height="20" data-bar-width="3" data-bar-spacing="2" class="inlinesparkline inline">
             1,0,4,9,5,7,8,9,5,7,8,4,7</div>
       </div>Flot charts</h3>
    <!-- START row-->
    <div class="row">
       <div class="col-lg-12">
          <div class="panel panel-default">
             <div class="panel-heading">
                <a href="#" data-perform="panel-dismiss" data-toggle="tooltip" title="Close Panel" class="pull-right">
                   <em class="fa fa-times"></em>
                </a>
                <a href="#" data-perform="panel-collapse" data-toggle="tooltip" title="Collapse Panel" class="pull-right">
                   <em class="fa fa-minus"></em>
                </a>
                <a href="#" data-perform="panel-refresh" data-spinner="traditional" data-toggle="tooltip" title="Refresh Panel" class="pull-right">
                   <em class="fa fa-refresh"></em>
                </a>
                <div class="panel-title">Area</div>
             </div>
             <div class="panel-collapse">
                <div class="panel-body">
                   <div data-source="server/chart-data-area.json" class="chart-area flot-chart"></div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <!-- END row-->
    <!-- START row-->
    <div class="row">
       <div class="col-lg-6">
          <div class="panel panel-default">
             <div class="panel-heading">
                <a href="#" data-perform="panel-dismiss" data-toggle="tooltip" title="Close Panel" class="pull-right">
                   <em class="fa fa-times"></em>
                </a>
                <a href="#" data-perform="panel-collapse" data-toggle="tooltip" title="Collapse Panel" class="pull-right">
                   <em class="fa fa-minus"></em>
                </a>
                <div class="panel-title">Bar</div>
             </div>
             <div class="panel-collapse">
                <div class="panel-body">
                   <div data-source="server/chart-data-bar.json" class="chart-bar flot-chart"></div>
                </div>
             </div>
          </div>
       </div>
       <div class="col-lg-6">
          <div class="panel panel-default">
             <div class="panel-heading">
                <a href="#" data-perform="panel-dismiss" data-toggle="tooltip" title="Close Panel" class="pull-right">
                   <em class="fa fa-times"></em>
                </a>
                <a href="#" data-perform="panel-collapse" data-toggle="tooltip" title="Collapse Panel" class="pull-right">
                   <em class="fa fa-minus"></em>
                </a>
                <div class="panel-title">Bar - Stacked</div>
             </div>
             <div class="panel-collapse">
                <div class="panel-body">
                   <div class="indicator show">
                      <span class="spinner"></span>
                   </div>
                   <div data-source="server/chart-data-barstacked.json" class="chart-bar-stacked flot-chart"></div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <!-- END row-->
    <!-- START row-->
    <div class="row">
       <div class="col-lg-12">
          <div class="panel panel-default">
             <div class="panel-heading">
                <a href="#" data-perform="panel-dismiss" data-toggle="tooltip" title="Close Panel" class="pull-right">
                   <em class="fa fa-times"></em>
                </a>
                <a href="#" data-perform="panel-collapse" data-toggle="tooltip" title="Collapse Panel" class="pull-right">
                   <em class="fa fa-minus"></em>
                </a>
                <div class="panel-title">Line</div>
             </div>
             <div class="panel-collapse">
                <div class="panel-body">
                   <div data-source="server/chart-data-line.json" class="chart-line flot-chart"></div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <!-- END row-->
    <!-- START row-->
    <div class="row">
       <div class="col-md-6">
          <div class="panel panel-default">
             <div class="panel-heading">
                <a href="#" data-perform="panel-dismiss" data-toggle="tooltip" title="Close Panel" class="pull-right">
                   <em class="fa fa-times"></em>
                </a>
                <a href="#" data-perform="panel-collapse" data-toggle="tooltip" title="Collapse Panel" class="pull-right">
                   <em class="fa fa-minus"></em>
                </a>
                <div class="panel-title">Pie</div>
             </div>
             <div class="panel-body">
                <div data-source="server/chart-data-pie.json" class="chart-pie flot-chart"></div>
             </div>
          </div>
       </div>
       <div class="col-md-6">
          <div class="panel panel-default">
             <div class="panel-heading">
                <a href="#" data-perform="panel-dismiss" data-toggle="tooltip" title="Close Panel" class="pull-right">
                   <em class="fa fa-times"></em>
                </a>
                <a href="#" data-perform="panel-collapse" data-toggle="tooltip" title="Collapse Panel" class="pull-right">
                   <em class="fa fa-minus"></em>
                </a>
                <div class="panel-title">Donut
                   <small>(loaded from json)</small>
                </div>
             </div>
             <div class="panel-body">
                <div data-source="server/chart-data-donut.json" class="chart-donut flot-chart"></div>
             </div>
          </div>
       </div>
    </div>
    <!-- END row-->
@endsection