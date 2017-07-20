@extends('layouts.app')

@section('content')
    <h3>Buttons</h3>
    <!-- START row-->
    <div class="row">
       <div class="col-md-6">
          <!-- START panel-->
          <div class="panel panel-default">
             <div class="panel-heading">
                <h3 class="panel-title">Button colors</h3>
             </div>
             <div class="panel-body">
                <button type="button" class="mb-sm btn btn-default">Default</button>
                <button type="button" class="mb-sm btn btn-primary">Primary</button>
                <button type="button" class="mb-sm btn btn-success">Success</button>
                <button type="button" class="mb-sm btn btn-info">Info</button>
                <button type="button" class="mb-sm btn btn-warning">Warning</button>
                <button type="button" class="mb-sm btn btn-danger">Danger</button>
                <button type="button" class="mb-sm btn btn-inverse">Inverse</button>
                <button type="button" class="mb-sm btn btn-green">Green</button>
                <button type="button" class="mb-sm btn btn-purple">Purple</button>
                <button type="button" class="mb-sm btn btn-pink">Pink</button>
                <br/>
                <br/><a href="#" class="btn btn-link">Button Link</a>
                <button type="button" class="btn btn-default">
                   <strong>button tag</strong>
                </button>
                <a href="#" class="btn btn-default">
                   <strong>anchor tag</strong>
                </a>
             </div>
          </div>
          <!-- END panel-->
       </div>
       <div class="col-md-6">
          <!-- START panel-->
          <div class="panel panel-default">
             <div class="panel-heading">
                <h3 class="panel-title">Button Labeled</h3>
             </div>
             <div class="panel-body">
                <!-- Success button with label -->
                <button type="button" class="btn btn-labeled btn-success">
                   <span class="btn-label"><i class="fa fa-check"></i>
                   </span>Success</button>
                <!-- Danger button with label -->
                <button type="button" class="btn btn-labeled btn-danger">
                   <span class="btn-label"><i class="fa fa-times"></i>
                   </span>Danger</button>
                <!-- Info button with label -->
                <button type="button" class="btn btn-labeled btn-info">
                   <span class="btn-label"><i class="fa fa-exclamation"></i>
                   </span>Info</button>
                <!-- Warning button with label -->
                <button type="button" class="btn btn-labeled btn-warning">
                   <span class="btn-label"><i class="fa fa-warning"></i>
                   </span>Warning</button>
                <br/>
                <br/>
                <!-- Standard button with label -->
                <button type="button" class="btn btn-labeled btn-default">
                   <span class="btn-label"><i class="fa fa-arrow-left"></i>
                   </span>Left</button>
                <!-- Standard button with label on the right side -->
                <button type="button" class="btn btn-labeled btn-default">Right
                   <span class="btn-label btn-label-right"><i class="fa fa-arrow-right"></i>
                   </span>
                </button>
             </div>
          </div>
          <!-- END panel-->
       </div>
    </div>
    <!-- END row-->
    <!-- START row-->
    <div class="row">
       <div class="col-md-6">
          <!-- START panel-->
          <div class="panel panel-default">
             <div class="panel-heading">
                <h3 class="panel-title">Button sizing</h3>
             </div>
             <div class="panel-body">
                <div class="row">
                   <div class="col-lg-6">
                      <p>
                         <button type="button" class="btn btn-primary btn-lg">Large button</button>
                         <button type="button" class="btn btn-default btn-lg">Large button</button>
                      </p>
                      <p>
                         <button type="button" class="btn btn-primary">Default button</button>
                         <button type="button" class="btn btn-default">Default button</button>
                      </p>
                   </div>
                   <div class="col-lg-6">
                      <p>
                         <button type="button" class="btn btn-primary btn-sm">Small button</button>
                         <button type="button" class="btn btn-default btn-sm">Small button</button>
                      </p>
                      <p>
                         <button type="button" class="btn btn-primary btn-xs">Extra small button</button>
                         <button type="button" class="btn btn-default btn-xs">Extra small button</button>
                      </p>
                   </div>
                </div>
             </div>
          </div>
          <!-- END panel-->
       </div>
       <div class="col-md-6">
          <!-- START panel-->
          <div class="panel panel-default">
             <div class="panel-heading">
                <h3 class="panel-title">Button group</h3>
             </div>
             <div class="panel-body">
                <p></p>
                <div class="btn-group">
                   <button type="button" class="btn btn-default">Left</button>
                   <button type="button" class="btn btn-default">Middle</button>
                   <button type="button" class="btn btn-default">Right</button>
                </div>
                <p></p>
                <p></p>
                <div class="btn-group">
                   <button type="button" class="btn btn-default">1</button>
                   <button type="button" class="btn btn-default">2</button>
                   <button type="button" class="btn btn-default">3</button>
                   <button type="button" class="btn btn-default">4</button>
                </div>
                <div class="btn-group">
                   <button type="button" class="btn btn-default">5</button>
                   <button type="button" class="btn btn-default">6</button>
                   <button type="button" class="btn btn-default">7</button>
                </div>
                <div class="btn-group">
                   <button type="button" class="btn btn-default">8</button>
                </div>
             </div>
          </div>
          <!-- END panel-->
       </div>
    </div>
    <!-- END row-->
    <!-- START row-->
    <div class="row">
       <div class="col-md-6">
          <!-- START panel-->
          <div class="panel panel-default">
             <div class="panel-heading">
                <h3 class="panel-title">Button Pills</h3>
             </div>
             <div class="panel-body">
                <p>Pill left</p>
                <p>
                   <button type="button" class="btn btn-pill-left btn-default">Default</button>
                   <button type="button" class="btn btn-pill-left btn-primary">Primary</button>
                   <button type="button" class="btn btn-pill-left btn-success">Success</button>
                   <button type="button" class="btn btn-pill-left btn-info">Info</button>
                   <button type="button" class="btn btn-pill-left btn-warning">Warning</button>
                   <button type="button" class="btn btn-pill-left btn-danger">Danger</button>
                   <button type="button" class="btn btn-pill-left btn-inverse">Inverse</button>
                </p>
                <p>Pill right</p>
                <p>
                   <button type="button" class="btn btn-pill-right btn-default">Default</button>
                   <button type="button" class="btn btn-pill-right btn-primary">Primary</button>
                   <button type="button" class="btn btn-pill-right btn-success">Success</button>
                   <button type="button" class="btn btn-pill-right btn-info">Info</button>
                   <button type="button" class="btn btn-pill-right btn-warning">Warning</button>
                   <button type="button" class="btn btn-pill-right btn-danger">Danger</button>
                   <button type="button" class="btn btn-pill-right btn-inverse">Inverse</button>
                </p>
             </div>
          </div>
          <!-- END panel-->
       </div>
       <div class="col-md-6">
          <!-- START panel-->
          <div class="panel panel-default">
             <div class="panel-heading">
                <h3 class="panel-title">Button Oval</h3>
             </div>
             <div class="panel-body">
                <button type="button" class="btn btn-oval btn-default">Default</button>
                <button type="button" class="btn btn-oval btn-primary">Primary</button>
                <button type="button" class="btn btn-oval btn-success">Success</button>
                <button type="button" class="btn btn-oval btn-info">Info</button>
                <button type="button" class="btn btn-oval btn-warning">Warning</button>
                <button type="button" class="btn btn-oval btn-danger">Danger</button>
                <button type="button" class="btn btn-oval btn-inverse">Inverse</button>
             </div>
          </div>
          <!-- END panel-->
          <!-- START panel-->
          <div class="panel panel-default">
             <div class="panel-heading">
                <h3 class="panel-title">Button Square</h3>
             </div>
             <div class="panel-body">
                <button type="button" class="btn btn-square btn-default">Default</button>
                <button type="button" class="btn btn-square btn-primary">Primary</button>
                <button type="button" class="btn btn-square btn-success">Success</button>
                <button type="button" class="btn btn-square btn-info">Info</button>
                <button type="button" class="btn btn-square btn-warning">Warning</button>
                <button type="button" class="btn btn-square btn-danger">Danger</button>
                <button type="button" class="btn btn-square btn-inverse">Inverse</button>
             </div>
          </div>
          <!-- END panel-->
       </div>
    </div>
    <!-- END row-->
    <!-- START row-->
    <div class="row">
       <div class="col-md-6">
          <!-- START panel-->
          <div class="panel panel-default">
             <div class="panel-heading">
                <h3 class="panel-title">Button dropdown</h3>
             </div>
             <div class="panel-body">
                <!-- START button group-->
                <div class="btn-group mb-sm">
                   <button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle">Default
                      <span class="caret"></span>
                   </button>
                   <ul role="menu" class="dropdown-menu">
                      <li><a href="#">Action</a>
                      </li>
                      <li><a href="#">Another action</a>
                      </li>
                      <li><a href="#">Something else here</a>
                      </li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a>
                      </li>
                   </ul>
                </div>
                <!-- END button group-->
                <!-- START button group-->
                <div class="btn-group mb-sm">
                   <button type="button" data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Primary
                      <span class="caret"></span>
                   </button>
                   <ul role="menu" class="dropdown-menu">
                      <li><a href="#">Action</a>
                      </li>
                      <li><a href="#">Another action</a>
                      </li>
                      <li><a href="#">Something else here</a>
                      </li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a>
                      </li>
                   </ul>
                </div>
                <!-- END button group-->
                <!-- START button group-->
                <div class="btn-group mb-sm">
                   <button type="button" data-toggle="dropdown" class="btn btn-success dropdown-toggle">Success
                      <span class="caret"></span>
                   </button>
                   <ul role="menu" class="dropdown-menu">
                      <li><a href="#">Action</a>
                      </li>
                      <li><a href="#">Another action</a>
                      </li>
                      <li><a href="#">Something else here</a>
                      </li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a>
                      </li>
                   </ul>
                </div>
                <!-- END button group-->
                <!-- START button group-->
                <div class="btn-group mb-sm">
                   <button type="button" data-toggle="dropdown" class="btn btn-info dropdown-toggle">Info
                      <span class="caret"></span>
                   </button>
                   <ul role="menu" class="dropdown-menu">
                      <li><a href="#">Action</a>
                      </li>
                      <li><a href="#">Another action</a>
                      </li>
                      <li><a href="#">Something else here</a>
                      </li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a>
                      </li>
                   </ul>
                </div>
                <!-- END button group-->
                <!-- START button group-->
                <div class="btn-group mb-sm">
                   <button type="button" data-toggle="dropdown" class="btn btn-warning dropdown-toggle">Warning
                      <span class="caret"></span>
                   </button>
                   <ul role="menu" class="dropdown-menu">
                      <li><a href="#">Action</a>
                      </li>
                      <li><a href="#">Another action</a>
                      </li>
                      <li><a href="#">Something else here</a>
                      </li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a>
                      </li>
                   </ul>
                </div>
                <!-- END button group-->
                <!-- START button group-->
                <div class="btn-group mb-sm">
                   <button type="button" data-toggle="dropdown" class="btn btn-danger dropdown-toggle">Danger
                      <span class="caret"></span>
                   </button>
                   <ul role="menu" class="dropdown-menu">
                      <li><a href="#">Action</a>
                      </li>
                      <li><a href="#">Another action</a>
                      </li>
                      <li><a href="#">Something else here</a>
                      </li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a>
                      </li>
                   </ul>
                </div>
                <!-- END button group-->
                <!-- START button group-->
                <div class="btn-group mb-sm">
                   <button type="button" data-toggle="dropdown" class="btn btn-inverse dropdown-toggle">Inverse
                      <span class="caret"></span>
                   </button>
                   <ul role="menu" class="dropdown-menu">
                      <li><a href="#">Action</a>
                      </li>
                      <li><a href="#">Another action</a>
                      </li>
                      <li><a href="#">Something else here</a>
                      </li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a>
                      </li>
                   </ul>
                </div>
                <!-- END button group-->
             </div>
          </div>
          <!-- END panel-->
       </div>
       <div class="col-md-6">
          <!-- START panel-->
          <div class="panel panel-default">
             <div class="panel-heading">
                <h3 class="panel-title ellipsis">Split button dropdown</h3>
             </div>
             <div class="panel-body">
                <!-- START button group-->
                <div class="btn-group mb-sm">
                   <button type="button" class="btn btn-default">Default</button>
                   <button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle">
                      <span class="caret"></span>
                   </button>
                   <ul role="menu" class="dropdown-menu">
                      <li><a href="#">Action</a>
                      </li>
                      <li><a href="#">Another action</a>
                      </li>
                      <li><a href="#">Something else here</a>
                      </li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a>
                      </li>
                   </ul>
                </div>
                <!-- END button group-->
                <!-- START button group-->
                <div class="btn-group mb-sm">
                   <button type="button" class="btn btn-primary">Primary</button>
                   <button type="button" data-toggle="dropdown" class="btn btn-primary dropdown-toggle">
                      <span class="caret"></span>
                   </button>
                   <ul role="menu" class="dropdown-menu">
                      <li><a href="#">Action</a>
                      </li>
                      <li><a href="#">Another action</a>
                      </li>
                      <li><a href="#">Something else here</a>
                      </li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a>
                      </li>
                   </ul>
                </div>
                <!-- END button group-->
                <!-- START button group-->
                <div class="btn-group mb-sm">
                   <button type="button" class="btn btn-success">Success</button>
                   <button type="button" data-toggle="dropdown" class="btn btn-success dropdown-toggle">
                      <span class="caret"></span>
                   </button>
                   <ul role="menu" class="dropdown-menu">
                      <li><a href="#">Action</a>
                      </li>
                      <li><a href="#">Another action</a>
                      </li>
                      <li><a href="#">Something else here</a>
                      </li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a>
                      </li>
                   </ul>
                </div>
                <!-- END button group-->
                <!-- START button group-->
                <div class="btn-group mb-sm">
                   <button type="button" class="btn btn-info">Info</button>
                   <button type="button" data-toggle="dropdown" class="btn btn-info dropdown-toggle">
                      <span class="caret"></span>
                   </button>
                   <ul role="menu" class="dropdown-menu">
                      <li><a href="#">Action</a>
                      </li>
                      <li><a href="#">Another action</a>
                      </li>
                      <li><a href="#">Something else here</a>
                      </li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a>
                      </li>
                   </ul>
                </div>
                <!-- END button group-->
                <!-- START button group-->
                <div class="btn-group mb-sm">
                   <button type="button" class="btn btn-warning">Warning</button>
                   <button type="button" data-toggle="dropdown" class="btn btn-warning dropdown-toggle">
                      <span class="caret"></span>
                   </button>
                   <ul role="menu" class="dropdown-menu">
                      <li><a href="#">Action</a>
                      </li>
                      <li><a href="#">Another action</a>
                      </li>
                      <li><a href="#">Something else here</a>
                      </li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a>
                      </li>
                   </ul>
                </div>
                <!-- END button group-->
                <!-- START button group-->
                <div class="btn-group mb-sm">
                   <button type="button" class="btn btn-danger">Danger</button>
                   <button type="button" data-toggle="dropdown" class="btn btn-danger dropdown-toggle">
                      <span class="caret"></span>
                   </button>
                   <ul role="menu" class="dropdown-menu">
                      <li><a href="#">Action</a>
                      </li>
                      <li><a href="#">Another action</a>
                      </li>
                      <li><a href="#">Something else here</a>
                      </li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a>
                      </li>
                   </ul>
                </div>
                <!-- END button group-->
                <!-- START button group-->
                <div class="btn-group mb-sm">
                   <button type="button" class="btn btn-inverse">Inverse</button>
                   <button type="button" data-toggle="dropdown" class="btn btn-inverse dropdown-toggle">
                      <span class="caret"></span>
                   </button>
                   <ul role="menu" class="dropdown-menu">
                      <li><a href="#">Action</a>
                      </li>
                      <li><a href="#">Another action</a>
                      </li>
                      <li><a href="#">Something else here</a>
                      </li>
                      <li class="divider"></li>
                      <li><a href="#">Separated link</a>
                      </li>
                   </ul>
                </div>
                <!-- END button group-->
             </div>
          </div>
          <!-- END panel-->
       </div>
    </div>
    <!-- END row-->
    <!-- START row-->
    <div class="row">
       <div class="col-md-6">
          <!-- START panel-->
          <div class="panel panel-default">
             <div class="panel-heading">
                <h3 class="panel-title">Pagination</h3>
             </div>
             <div class="panel-body">
                <!-- START row-->
                <div class="row">
                   <div class="col-lg-6">
                      <h4>Default pagination</h4>
                      <ul class="pagination">
                         <li><a href="#">«</a>
                         </li>
                         <li><a href="#">1</a>
                         </li>
                         <li><a href="#">2</a>
                         </li>
                         <li><a href="#">3</a>
                         </li>
                         <li><a href="#">4</a>
                         </li>
                         <li><a href="#">5</a>
                         </li>
                         <li><a href="#">»</a>
                         </li>
                      </ul>
                      <h4>Disabled and active states</h4>
                      <ul class="pagination">
                         <li class="disabled"><a href="#">«</a>
                         </li>
                         <li class="active"><a href="#">1<span class="sr-only">(current)</span></a>
                         </li>
                         <li><a href="#">2</a>
                         </li>
                         <li><a href="#">3</a>
                         </li>
                         <li><a href="#">4</a>
                         </li>
                         <li><a href="#">5</a>
                         </li>
                         <li><a href="#">»</a>
                         </li>
                      </ul>
                   </div>
                   <div class="col-lg-6">
                      <h4>Size</h4>
                      <div>
                         <ul class="pagination pagination-lg m0">
                            <li><a href="#">«</a>
                            </li>
                            <li><a href="#">1</a>
                            </li>
                            <li><a href="#">2</a>
                            </li>
                            <li><a href="#">3</a>
                            </li>
                            <li><a href="#">4</a>
                            </li>
                            <li><a href="#">»</a>
                            </li>
                         </ul>
                      </div>
                      <div>
                         <ul class="pagination m0">
                            <li><a href="#">«</a>
                            </li>
                            <li><a href="#">1</a>
                            </li>
                            <li><a href="#">2</a>
                            </li>
                            <li><a href="#">3</a>
                            </li>
                            <li><a href="#">4</a>
                            </li>
                            <li><a href="#">»</a>
                            </li>
                         </ul>
                      </div>
                      <div>
                         <ul class="pagination pagination-sm m0">
                            <li><a href="#">«</a>
                            </li>
                            <li><a href="#">1</a>
                            </li>
                            <li><a href="#">2</a>
                            </li>
                            <li><a href="#">3</a>
                            </li>
                            <li><a href="#">4</a>
                            </li>
                            <li><a href="#">»</a>
                            </li>
                         </ul>
                      </div>
                   </div>
                </div>
                <!-- END row-->
             </div>
          </div>
          <!-- END panel-->
       </div>
       <div class="col-md-6">
          <!-- START panel-->
          <div class="panel panel-default">
             <div class="panel-heading">
                <h3 class="panel-title">Pager</h3>
             </div>
             <div class="panel-body">
                <h4>Alignment</h4>
                <ul class="pager">
                   <li><a href="#">Previous</a>
                   </li>
                   <li><a href="#">Next</a>
                   </li>
                </ul>
                <ul class="pager">
                   <li class="previous"><a href="#">← Older</a>
                   </li>
                   <li class="next"><a href="#">Newer →</a>
                   </li>
                </ul>
                <h4>Disabled state</h4>
                <ul class="pager">
                   <li class="previous disabled"><a href="#">← Older</a>
                   </li>
                   <li class="next"><a href="#">Newer →</a>
                   </li>
                </ul>
             </div>
          </div>
          <!-- START panel-->
       </div>
    </div>
    <!-- END row-->
@endsection