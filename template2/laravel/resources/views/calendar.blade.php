@extends('layouts.app')

@section('content')
    <h3>Full Calendar
       <small>Drag and Drop events and tasks</small>
    </h3>
    <!-- START row-->
    <div class="row">
       <div class="col-md-3">
          <!-- START panel-->
          <div class="panel panel-default">
             <div class="panel-heading">
                <h4 class="panel-title">Draggable Events</h4>
             </div>
             <!-- Default external events list-->
             <div class="external-events-trash">
                <div class="panel-body">
                   <div class="external-events">
                      <div class="bg-green">Lunch</div>
                      <div class="bg-danger">Go home</div>
                      <div class="bg-info">Do homework</div>
                      <div class="bg-warning">Work on UI design</div>
                      <div class="bg-inverse">Sleep tight</div>
                   </div>
                   <p>
                      <span class="checkbox c-checkbox">
                         <label>
                            <input id="remove-after-drop" type="checkbox" />
                            <span class="fa fa-check"></span>Remove after Drop</label>
                      </span>
                   </p>
                </div>
             </div>
          </div>
          <!-- END panel-->
          <!-- START panel-->
          <div class="panel panel-default">
             <div class="panel-heading">
                <h3 class="panel-title">Create Event</h3>
             </div>
             <div class="panel-body">
                <div class="input-group mb">
                   <input type="text" placeholder="Event name..." class="form-control external-event-name" />
                   <div class="input-group-btn">
                      <button type="button" class="btn btn-default external-event-add-btn">Add</button>
                   </div>
                </div>
                <p class="text-muted">
                   <small>Choose a Color</small>
                </p>
                <ul class="list-inline external-event-color-selector">
                   <li class="p0">
                      <a href="#" class="circle circle-danger circle-xl selected"></a>
                   </li>
                   <li class="p0">
                      <a href="#" class="circle circle-primary circle-xl"></a>
                   </li>
                   <li class="p0">
                      <a href="#" class="circle circle-info circle-xl"></a>
                   </li>
                   <li class="p0">
                      <a href="#" class="circle circle-success circle-xl"></a>
                   </li>
                   <li class="p0">
                      <a href="#" class="circle circle-warning circle-xl"></a>
                   </li>
                   <li class="p0">
                      <a href="#" class="circle circle-green circle-xl"></a>
                   </li>
                   <li class="p0">
                      <a href="#" class="circle circle-pink circle-xl"></a>
                   </li>
                   <li class="p0">
                      <a href="#" class="circle circle-inverse circle-xl"></a>
                   </li>
                   <li class="p0">
                      <a href="#" class="circle circle-purple circle-xl"></a>
                   </li>
                </ul>
             </div>
          </div>
          <!-- END panel-->
       </div>
       <div class="col-md-9">
          <!-- START panel-->
          <div class="panel">
             <div class="panel-body">
                <!-- START calendar-->
                <div id="calendar"></div>
                <!-- END calendar-->
             </div>
          </div>
          <!-- END panel-->
       </div>
    </div>
    <!-- END row-->
@endsection