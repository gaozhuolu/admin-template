@extends('layouts.app')

@section('content')
    <h3>Timeline</h3>
    <!-- START timeline-->
    <ul class="timeline">
       <li data-datetime="Now" class="timeline-separator"></li>
       <!-- START timeline item-->
       <li>
          <div class="timeline-badge primary">
             <em class="fa fa-users"></em>
          </div>
          <div class="timeline-date">
             <time datetime="2014-05-18 10:00"></time>
          </div>
          <div class="timeline-panel">
             <div class="popover left">
                <div class="arrow"></div>
                <h3 class="popover-title">Client Meeting</h3>
                <div class="popover-content">
                   <p>Av 123 St - Floor 2
                      <br/>
                      <small>Pellentesque ut diam velit, eget porttitor risus. Nullam posuere euismod volutpat.</small>
                   </p>
                </div>
             </div>
          </div>
       </li>
       <!-- END timeline item-->
       <!-- START timeline item-->
       <li class="timeline-inverted">
          <div class="timeline-badge warning">
             <em class="fa fa-phone"></em>
          </div>
          <div class="timeline-date">
             <time datetime="2014-05-18 02:00"></time>
          </div>
          <div class="timeline-panel">
             <div class="popover right">
                <div class="arrow"></div>
                <h3 class="popover-title">Call</h3>
                <div class="popover-content">
                   <p>Michael <a href="tel:+011654524578">(+011) 6545 24578 ext. 132</a>
                      <br/>
                      <small>Pellentesque ut diam velit, eget porttitor risus. Nullam posuere euismod volutpat.</small>
                   </p>
                </div>
             </div>
          </div>
       </li>
       <!-- END timeline item-->
       <!-- START timeline separator-->
       <li data-datetime="Yesterday" class="timeline-separator"></li>
       <!-- END timeline separator-->
       <!-- START timeline item-->
       <li>
          <div class="timeline-badge danger">
             <em class="fa fa-video-camera"></em>
          </div>
          <div class="timeline-date">
             <time datetime="2014-05-20 09:00"></time>
          </div>
          <div class="timeline-panel">
             <div class="popover left">
                <div class="arrow"></div>
                <h3 class="popover-title">Conference</h3>
                <div class="popover-content">
                   <p>Join development group</p>
                   <small>
                      <a href="skype:echo123?call">
                         <em class="fa fa-phone"></em>Call the Skype Echo</a>
                   </small>
                </div>
             </div>
          </div>
       </li>
       <!-- END timeline item-->
       <!-- START timeline item-->
       <li class="timeline-inverted">
          <div class="timeline-date">
             <time datetime="2014-05-20 07:00"></time>
          </div>
          <div class="timeline-panel">
             <div class="popover right">
                <div class="arrow"></div>
                <h3 class="popover-title">Appointment</h3>
                <div class="popover-content">
                   <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam.</p>
                   <div class="btn-group">
                      <a href="#" data-toggle="dropdown" data-play="fadeIn" class="dropdown-toggle">
                         <em class="fa fa-paperclip"></em>
                      </a>
                      <ul class="dropdown-menu text-left">
                         <li>
                            <a href="#">
                               <em class="fa fa-download"></em>Download</a>
                         </li>
                         <li>
                            <a href="#">
                               <em class="fa fa-share"></em>Send to</a>
                         </li>
                         <li class="divider"></li>
                         <li>
                            <a href="#">
                               <em class="fa fa-times"></em>Delete</a>
                         </li>
                      </ul>
                   </div>
                </div>
             </div>
          </div>
       </li>
       <!-- END timeline item-->
       <!-- START timeline item-->
       <li>
          <div class="timeline-badge info">
             <em class="fa fa-plane"></em>
          </div>
          <div class="timeline-date">
             <time datetime="2014-05-20 08:00"></time>
          </div>
          <div class="timeline-panel">
             <div class="popover left">
                <div class="arrow"></div>
                <h3 class="popover-title">Fly</h3>
                <div class="popover-content">
                   <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                </div>
             </div>
          </div>
       </li>
       <!-- END timeline item-->
       <!-- START timeline item-->
       <li>
          <div class="timeline-date">
             <time datetime="2014-05-21 23:00"></time>
          </div>
          <div class="timeline-panel">
             <div class="popover left">
                <div class="arrow"></div>
                <h3 class="popover-title">Appointment</h3>
                <div class="popover-content">
                   <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                </div>
             </div>
          </div>
       </li>
       <!-- END timeline item-->
       <!-- START timeline separator-->
       <li data-datetime="2014-05-21" class="timeline-separator"></li>
       <!-- END timeline separator-->
       <!-- START timeline item-->
       <li class="timeline-inverted">
          <div class="timeline-badge success">
             <em class="fa fa-music"></em>
          </div>
          <div class="timeline-date">
             <time datetime="2014-05-21 11:30"></time>
          </div>
          <div class="timeline-panel">
             <div class="popover right">
                <div class="arrow"></div>
                <h3 class="popover-title">Relax</h3>
                <div class="popover-content">
                   <p>Listen some music</p>
                </div>
             </div>
          </div>
       </li>
       <!-- END timeline item-->
       <!-- START timeline item-->
       <li data-datetime="Old Tasks" class="timeline-separator"></li>
       <!-- END timeline item-->
       <!-- START timeline item-->
       <li>
          <a href="#" class="timeline-badge">
             <em class="fa fa-plus"></em>
          </a>
       </li>
       <!-- END timeline item-->
    </ul>
    <!-- END timeline-->
@endsection