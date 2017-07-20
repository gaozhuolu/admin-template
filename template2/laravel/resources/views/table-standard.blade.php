@extends('layouts.app')

@section('content')
    <h3>Tables
       <small>Bootstrap Responsive tables</small>
    </h3>
    <!-- START row-->
    <div class="row">
       <div class="col-lg-6">
          <!-- START panel-->
          <div class="panel panel-default">
             <div class="panel-heading">Kitchen Sink</div>
             <div class="panel-body">
                <!-- START table-responsive-->
                <div class="table-responsive">
                   <table class="table table-striped table-bordered table-hover">
                      <thead>
                         <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                         </tr>
                      </thead>
                      <tbody>
                         <tr>
                            <td>1</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                         </tr>
                         <tr>
                            <td>2</td>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                         </tr>
                         <tr>
                            <td>3</td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                         </tr>
                      </tbody>
                   </table>
                </div>
                <!-- END table-responsive-->
             </div>
          </div>
          <!-- END panel-->
       </div>
       <div class="col-lg-6">
          <!-- START panel-->
          <div class="panel panel-default">
             <div class="panel-heading">Basic Table</div>
             <div class="panel-body">
                <!-- START table-responsive-->
                <div class="table-responsive">
                   <table class="table">
                      <thead>
                         <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                         </tr>
                      </thead>
                      <tbody>
                         <tr>
                            <td>1</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                         </tr>
                         <tr>
                            <td>2</td>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                         </tr>
                         <tr>
                            <td>3</td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                         </tr>
                      </tbody>
                   </table>
                </div>
                <!-- END table-responsive-->
             </div>
          </div>
          <!-- END panel-->
       </div>
    </div>
    <!-- END row-->
    <!-- START row-->
    <div class="row">
       <div class="col-lg-6">
          <div class="panel panel-default">
             <div class="panel-heading">Striped Rows</div>
             <div class="panel-body">
                <div class="table-responsive">
                   <table class="table table-striped">
                      <thead>
                         <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                         </tr>
                      </thead>
                      <tbody>
                         <tr>
                            <td>1</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                         </tr>
                         <tr>
                            <td>2</td>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                         </tr>
                         <tr>
                            <td>3</td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                         </tr>
                      </tbody>
                   </table>
                </div>
             </div>
          </div>
       </div>
       <div class="col-lg-6">
          <div class="panel panel-default">
             <div class="panel-heading">Bordered Table</div>
             <div class="panel-body">
                <div class="table-responsive table-bordered">
                   <table class="table">
                      <thead>
                         <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                         </tr>
                      </thead>
                      <tbody>
                         <tr>
                            <td>1</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                         </tr>
                         <tr>
                            <td>2</td>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                         </tr>
                         <tr>
                            <td>3</td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                         </tr>
                      </tbody>
                   </table>
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
             <div class="panel-heading">Hover Rows</div>
             <div class="panel-body">
                <div class="table-responsive">
                   <table class="table table-hover">
                      <thead>
                         <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                         </tr>
                      </thead>
                      <tbody>
                         <tr>
                            <td>1</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                         </tr>
                         <tr>
                            <td>2</td>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                         </tr>
                         <tr>
                            <td>3</td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                         </tr>
                      </tbody>
                   </table>
                </div>
             </div>
          </div>
       </div>
       <div class="col-lg-6">
          <div class="panel panel-default">
             <div class="panel-heading">Context Classes</div>
             <div class="panel-body">
                <div class="table-responsive">
                   <table class="table">
                      <thead>
                         <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Username</th>
                         </tr>
                      </thead>
                      <tbody>
                         <tr class="success">
                            <td>1</td>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                         </tr>
                         <tr class="info">
                            <td>2</td>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                         </tr>
                         <tr class="warning">
                            <td>3</td>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                         </tr>
                         <tr class="danger">
                            <td>4</td>
                            <td>John</td>
                            <td>Smith</td>
                            <td>@jsmith</td>
                         </tr>
                      </tbody>
                   </table>
                </div>
             </div>
          </div>
       </div>
    </div>
    <!-- END row-->
@endsection