@extends('layouts.app')

@section('content')
    <div class="row">
       <div class="col-lg-9 col-md-12">
          <div class="panel b0">
             <div class="panel-body">
                <div class="row pv-lg">
                   <div class="col-xs-6 col-md-3 text-center">
                      <div class="inline text-left text-center">
                         <div class="lh1 pt">
                            <strong class="text-muted pl-sm">USERS</strong>
                         </div>
                         <h1 class="mv text-xl text-thin">1,350</h1>
                         <div class="pt">
                            <div data-type="line" data-height="20" data-width="70" data-line-width="2" data-line-color="#1c75bf" data-spot-color="#fff" data-fill-color="transparent" data-highlight-line-color="#1c75bf" data-spot-radius="0" class="inlinesparkline">4, 4, 6, 5, 3, 4, 5, 6</div>
                         </div>
                      </div>
                   </div>
                   <div class="col-xs-6 col-md-3 text-center">
                      <div class="inline text-left text-center">
                         <div class="lh1 pt">
                            <strong class="text-muted pl-sm">CUSTOMERS</strong>
                         </div>
                         <h1 class="mv text-xl text-thin">9,400</h1>
                         <div class="pt">
                            <div data-type="line" data-height="20" data-width="70" data-line-width="2" data-line-color="#7266ba" data-spot-color="#fff" data-fill-color="transparent" data-highlight-line-color="#7266ba" data-spot-radius="0" class="inlinesparkline">3, 2, 4, 3, 4, 3, 4, 5</div>
                         </div>
                      </div>
                   </div>
                   <div class="col-xs-6 col-md-3 text-center">
                      <div class="inline text-left text-center">
                         <div class="lh1 pt">
                            <strong class="text-muted pl-sm">HOURS</strong>
                         </div>
                         <h1 class="mv text-xl text-thin">1,000</h1>
                         <div class="pt">
                            <div data-type="line" data-height="20" data-width="70" data-line-width="2" data-line-color="#27c24c" data-spot-color="#fff" data-fill-color="transparent" data-highlight-line-color="#27c24c" data-spot-radius="0" class="inlinesparkline">4, 6, 5, 3, 5, 3, 4, 6</div>
                         </div>
                      </div>
                   </div>
                   <div class="col-xs-6 col-md-3 text-center">
                      <div class="inline text-left text-center">
                         <div class="lh1 pt">
                            <strong class="text-muted pl-sm">AVERAGE</strong>
                         </div>
                         <h1 class="mv text-xl text-thin">90.99</h1>
                         <div class="pt">
                            <div data-type="line" data-height="20" data-width="70" data-line-width="2" data-line-color="#ff902b" data-spot-color="#fff" data-fill-color="transparent" data-highlight-line-color="#ff902b" data-spot-radius="0" class="inlinesparkline">5, 4, 3, 4, 3, 4, 3, 2, 2</div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
             <div class="oh">
                <div style="margin: 0 -2px">
                   <div id="dashboard-splinechart-1" data-height="300px"></div>
                </div>
             </div>
          </div>
       </div>
       <div class="col-lg-3 col-md-12">
          <div class="row">
             <div class="col-lg-12 col-md-4">
                <div class="panel b0 oh bg-info">
                   <div class="panel-heading pb0">
                      <div class="pull-right">
                         <em class="fa fa-level-up fa-lg"></em>
                      </div>
                      <div class="panel-title">Inversion</div>
                      <small class="text-muted">Satate of current income anually</small>
                   </div>
                   <div class="ph text-lg m0">$ 5,589</div>
                   <div data-type="line" data-resize="true" data-line-width="2" data-width="100%" data-height="40px" data-line-color="#fff" data-chart-range-min="0" data-fill-color="" data-spot-color="#fff" data-min-spot-color="#fff"
                   data-max-spot-color="#fff" data-highlight-spot-color="#fff" data-highlight-line-color="#fff" values="4, 4, 3, 5, 3, 4, 6, 5, 3, 2, 3, 4, 6" style="margin: -4px" class="inlinesparkline"></div>
                </div>
             </div>
             <div class="col-lg-12 col-md-4">
                <div class="panel b0 oh">
                   <div class="panel-heading mb-xl">
                      <div class="pull-right label label-success fa-lg">90x</div>
                      <div class="panel-title">Conversion</div>
                      <span class="circle circle-green ml0"></span>
                      <small class="text-muted">Quisque nec velit</small>
                   </div>
                   <div class="text-center">
                      <div data-type="bar" data-resize="true" data-bar-width="18" data-bar-spacing="4" data-width="100%" data-height="60px" data-bar-color="#14ddb3" data-chart-range-min="0" data-spot-color="#23b7e5" data-min-spot-color="#23b7e5"
                      data-max-spot-color="#23b7e5" data-highlight-spot-color="#23b7e5" data-highlight-line-color="#23b7e5" values="4,6,3,4,4,6,3,4,5,7,8" style="margin: -4px" class="inlinesparkline"></div>
                   </div>
                </div>
             </div>
             <div class="col-lg-12 col-md-4">
                <div class="panel b0 oh">
                   <div class="panel-heading mb-xl">
                      <div class="pull-right">10,3 %</div>
                      <div class="panel-title">Visitors</div>
                      <span class="circle circle-purple ml0"></span>
                      <small class="text-muted">Quisque nec velit rhoncus</small>
                   </div>
                   <div data-type="line" data-resize="true" data-line-width="2" data-width="100%" data-height="60px" data-line-color="#7266ba" data-chart-range-min="0" data-fill-color="rgba(114,102,186,0.6)" data-spot-color="#7266ba" data-min-spot-color="#7266ba"
                   data-max-spot-color="#7266ba" data-highlight-spot-color="#7266ba" data-highlight-line-color="#7266ba" values="4,6,3,4,4,6,3,4,5,7,8" style="margin: -4px" class="inlinesparkline"></div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <div class="row">
       <div class="col-md-6">
          <div class="panel">
             <div class="panel-heading">
                <div class="panel-title">Orders
                   <a href="" class="pull-right">
                      <em class="fa fa-refresh text-muted"></em>
                   </a>
                   <span class="text-muted">(5 new)</span>
                </div>
                <small class="text-muted">10 new customers registered last hour</small>
             </div>
             <!-- START table-responsive-->
             <div class="table-responsive bg-white">
                <table class="table">
                   <thead>
                      <tr>
                         <th>
                            <strong class="text-gray-darker">
                               <span class="pl">#</span>
                            </strong>
                         </th>
                         <th>
                            <strong class="text-gray-darker">Date</strong>
                         </th>
                         <th width="30%" class="visible-lg visible-sm visible-xs">
                            <strong class="text-gray-darker">Address</strong>
                         </th>
                         <th>
                            <strong class="text-gray-darker">Customer</strong>
                         </th>
                         <th>
                            <strong class="text-gray-darker">
                               <span class="circle circle-default"></span>
                            </strong>
                         </th>
                      </tr>
                   </thead>
                   <tbody>
                      <tr>
                         <td><a href="#">#3834</a>
                         </td>
                         <td>11/01/2016</td>
                         <td class="visible-lg visible-sm visible-xs">Some St. 77, LA</td>
                         <td>Marvin Fuller</td>
                         <td>
                            <span class="circle circle-success"></span>
                         </td>
                      </tr>
                      <tr>
                         <td><a href="#">#2938</a>
                         </td>
                         <td>5/10/2016</td>
                         <td class="visible-lg visible-sm visible-xs">Fake St. 123, LA</td>
                         <td>Anna Mitchell</td>
                         <td>
                            <span class="circle circle-success"></span>
                         </td>
                      </tr>
                      <tr>
                         <td><a href="#">#9018</a>
                         </td>
                         <td>12/09/2016</td>
                         <td class="visible-lg visible-sm visible-xs">Another St. 456</td>
                         <td>Alexis Wash</td>
                         <td>
                            <span class="circle circle-danger"></span>
                         </td>
                      </tr>
                      <tr>
                         <td><a href="#">#2938</a>
                         </td>
                         <td>5/10/2016</td>
                         <td class="visible-lg visible-sm visible-xs">Fake St. 123, LA</td>
                         <td>Javier Ro</td>
                         <td>
                            <span class="circle circle-success"></span>
                         </td>
                      </tr>
                      <tr>
                         <td><a href="#">#2938</a>
                         </td>
                         <td>5/10/2016</td>
                         <td class="visible-lg visible-sm visible-xs">Fake St. 123, LA</td>
                         <td>Krin Long</td>
                         <td>
                            <span class="circle circle-warning"></span>
                         </td>
                      </tr>
                      <tr>
                         <td><a href="#">#2938</a>
                         </td>
                         <td>5/10/2016</td>
                         <td class="visible-lg visible-sm visible-xs">Fake St. 123, LA</td>
                         <td>Cass Campbell</td>
                         <td>
                            <span class="circle circle-warning"></span>
                         </td>
                      </tr>
                   </tbody>
                </table>
             </div>
             <!-- END table-responsive-->
          </div>
       </div>
       <div class="col-md-6">
          <div class="panel">
             <div class="panel-heading">
                <div class="panel-title">
                   <a href="" class="pull-right">
                      <em class="fa fa-refresh text-muted"></em>
                   </a>Projects in course</div>
                <small class="text-muted">Viewing 7 from USA</small>
             </div>
             <div class="panel-body bg-white">
                <div id="vector-map" style="height:220px" class="vector-map"></div>
                <p class="text-sm text-muted text-right">Status is synchronized every 15 minutes</p>
             </div>
          </div>
       </div>
    </div>
    <div class="panel b0">
       <div class="row">
          <div class="col-lg-4">
             <div class="p">
                <h4 class="page-header mv">Progress per project</h4>
                <table class="table table-transparent">
                   <tbody>
                      <tr>
                         <td class="wd-xxs">
                            <div data-type="bar" data-bar-width="4" data-bar-spacing="3" data-height="30" data-chart-range-min="0" data-bar-color="#23b7e5" class="inlinesparkline">5,6,6,4,8</div>
                         </td>
                         <td>
                            <h5 class="m0 text-bold text-dark">Angular2 migration</h5>
                            <small>Vivamus gravida justo at augue mattis placerat.</small>
                         </td>
                      </tr>
                      <tr>
                         <td class="wd-xxs">
                            <div data-type="bar" data-bar-width="4" data-bar-spacing="3" data-height="30" data-chart-range-min="0" data-bar-color="#14ddb3" class="inlinesparkline">5,3,6,7,8</div>
                         </td>
                         <td>
                            <h5 class="m0 text-bold text-dark">Totem app refactor</h5>
                            <small>Morbi pretium varius aliquam.</small>
                         </td>
                      </tr>
                      <tr>
                         <td class="wd-xxs">
                            <div data-type="bar" data-bar-width="4" data-bar-spacing="3" data-height="30" data-chart-range-min="0" data-bar-color="#14ddb3" class="inlinesparkline">5,3,2,7,2</div>
                         </td>
                         <td>
                            <h5 class="m0 text-bold text-dark">ReactJS implementation</h5>
                            <small>Sed egestas, augue vitae blandit imperdiet.</small>
                         </td>
                      </tr>
                      <tr>
                         <td class="wd-xxs">
                            <div data-type="bar" data-bar-width="4" data-bar-spacing="3" data-height="30" data-chart-range-min="0" data-bar-color="#7266ba" class="inlinesparkline">5,3,8,7,8</div>
                         </td>
                         <td>
                            <h5 class="m0 text-bold text-dark">Release Totem v2.3</h5>
                            <small>Aliquam erat volutpat.</small>
                         </td>
                      </tr>
                      <tr>
                         <td class="wd-xxs">
                            <div data-type="bar" data-bar-width="4" data-bar-spacing="3" data-height="30" data-chart-range-min="0" data-bar-color="#14ddb3" class="inlinesparkline">5,3,6,7,6</div>
                         </td>
                         <td>
                            <h5 class="m0 text-bold text-dark">Rebuilt of core</h5>
                            <small>In nec ante sit amet lectus.</small>
                         </td>
                      </tr>
                      <tr>
                         <td class="wd-xxs">
                            <div data-type="bar" data-bar-width="4" data-bar-spacing="3" data-height="30" data-chart-range-min="0" data-bar-color="#23b7e5" class="inlinesparkline">5,3,6,7,4</div>
                         </td>
                         <td>
                            <h5 class="m0 text-bold text-dark">ReactJS implementation</h5>
                            <small>Sed egestas, augue vitae blandit imperdiet.</small>
                         </td>
                      </tr>
                   </tbody>
                </table>
             </div>
          </div>
          <div class="col-lg-8">
             <div class="bg-inverse">
                <div class="p-lg clearfix">
                   <div class="pull-right">
                      <div data-type="pie" data-height="40" data-slice-colors="[&quot;#3a3f51&quot;,&quot;#23b7e5&quot;]" class="inlinesparkline">65,35</div>
                   </div>
                   <div class="pull-left">
                      <h2 class="m0 text-white">Overall evolution of projects</h2>
                      <p class="text-muted">
                         <small>Based on begin 2015 to actuality</small>
                      </p>
                   </div>
                </div>
                <div class="oh">
                   <div style="margin: 0 -10px -10px -10px">
                      <div id="dashboard-splinechart-2" data-height="320px"></div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
@endsection