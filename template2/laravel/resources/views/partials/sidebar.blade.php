<!-- START aside-->
<aside class="aside">
    <!-- START Sidebar (left)-->
    <nav class="sidebar">
        <!-- START user info-->
        <div class="item user-block">
            <!-- User picture-->
            <div class="user-block-picture">
                <div class="user-block-status">
                    <img src="assets/img/user/02.jpg" alt="Avatar" width="60" height="60" class="img-thumbnail img-circle">
                    <div class="circle circle-success circle-lg"></div>
                </div>
                <!-- Status when collapsed-->
            </div>
            <!-- Name and Role-->
            <div class="user-block-info">
                <span class="user-block-name item-text">Welcome User</span>
                <span class="user-block-role">UX-Dev</span>
            </div>
        </div>
        <!-- END user info-->
        <ul class="nav">
            <!-- START Menu-->
            <li class="nav-heading">Main navigation</li>
            <li class="{{Request::is('dashboard/*') ? 'active' : ''}}">
                <a href="#" title="Dashboard" data-toggle="collapse-next" class="has-submenu">
                    <em class="fa fa-dot-circle-o"></em>
                    <span class="item-text">Dashboard</span>
                </a>
                <!-- START SubMenu item-->
                <ul class="nav collapse {{Request::is('dashboard/*') ? 'in' : ''}}">
                    <li class="{{Request::is('*/dashboardv1') ? 'active' : ''}}">
                        <a href="dashboard/dashboardv1" title="Dashboardv1" class="no-submenu">
                            <div class="label label-primary pull-right">10</div>
                            <span class="item-text">Dashboardv1</span>
                        </a>
                    </li>
                    <li class="{{Request::is('*/dashboardv2') ? 'active' : ''}}">
                        <a href="dashboard/dashboardv2" title="Dashboardv2" class="no-submenu">
                            <span class="item-text">Dashboardv2</span>
                        </a>
                    </li>
                </ul>
                <!-- END SubMenu item-->
            </li>
            <li class="{{Request::is('widgets') ? 'active' : ''}}">
                <a href="widgets" title="Widgets" class="no-submenu">
                    <em class="fa fa-cube"></em>
                    <span class="item-text">Widgets</span>
                </a>
            </li>
            <li class="{{Request::is('elements/*') ? 'active' : ''}}">
                <a href="#" title="Elements" data-toggle="collapse-next" class="has-submenu">
                    <em class="fa fa-flask"></em>
                    <span class="item-text">Elements</span>
                </a>
                <!-- START SubMenu item-->
                <ul class="nav collapse {{Request::is('elements/*') ? 'in' : ''}}">
                    <li class="{{Request::is('elements/button') ? 'active' : ''}}">
                        <a href="elements/button" title="Buttons" class="no-submenu">
                            <span class="item-text">Buttons</span>
                        </a>
                    </li>
                    <li class="{{Request::is('elements/notifications') ? 'active' : ''}}">
                        <a href="elements/notifications" title="Notifications" class="no-submenu">
                            <span class="item-text">Notifications</span>
                        </a>
                    </li>
                    <li class="{{Request::is('elements/spinners') ? 'active' : ''}}">
                        <a href="elements/spinners" title="Spinners" class="no-submenu">
                            <span class="item-text">Spinners</span>
                        </a>
                    </li>
                    <li class="{{Request::is('elements/animations') ? 'active' : ''}}">
                        <a href="elements/animations" title="Animations" class="no-submenu">
                            <span class="item-text">Animations</span>
                        </a>
                    </li>
                    <li class="{{Request::is('elements/dropdown-animations') ? 'active' : ''}}">
                        <a href="elements/dropdown-animations" title="Dropdown" class="no-submenu">
                            <span class="item-text">Dropdown</span>
                        </a>
                    </li>
                    <li class="{{Request::is('elements/panels') ? 'active' : ''}}">
                        <a href="elements/panels" title="Panels" class="no-submenu">
                            <span class="item-text">Panels</span>
                        </a>
                    </li>
                    <li class="{{Request::is('elements/portlets') ? 'active' : ''}}">
                        <a href="elements/portlets" title="Portlets" class="no-submenu">
                            <span class="item-text">Portlets</span>
                        </a>
                    </li>
                    <li class="{{Request::is('elements/maps') ? 'active' : ''}}">
                        <a href="elements/maps" title="Maps" class="no-submenu">
                            <span class="item-text">Maps</span>
                        </a>
                    </li>
                    <li class="{{Request::is('elements/grid') ? 'active' : ''}}">
                        <a href="elements/grid" title="Grid" class="no-submenu">
                            <span class="item-text">Grid</span>
                        </a>
                    </li>
                    <li class="{{Request::is('elements/grid-masonry') ? 'active' : ''}}">
                        <a href="elements/grid-masonry" title="Grid Masonry" class="no-submenu">
                            <span class="item-text">Grid Masonry</span>
                        </a>
                    </li>
                    <li class="{{Request::is('elements/typo') ? 'active' : ''}}">
                        <a href="elements/typo" title="Typography" class="no-submenu">
                            <span class="item-text">Typography</span>
                        </a>
                    </li>
                    <li class="{{Request::is('elements/icons') ? 'active' : ''}}">
                        <a href="elements/icons" title="Icons" class="no-submenu">
                            <div class="label label-primary pull-right">+400</div>
                            <span class="item-text">Icons</span>
                        </a>
                    </li>
                </ul>
                <!-- END SubMenu item-->
            </li>
            <li class="{{Request::is('forms/*') ? 'active' : ''}}">
                <a href="#" title="Forms" data-toggle="collapse-next" class="has-submenu">
                    <em class="fa fa-edit"></em>
                    <span class="item-text">Forms</span>
                </a>
                <!-- START SubMenu item-->
                <ul class="nav collapse {{Request::is('forms/*') ? 'in' : ''}}">
                    <li class="{{Request::is('forms/form-standard') ? 'active':''}}">
                        <a href="forms/form-standard" title="Standard" class="no-submenu">
                            <span class="item-text">Standard</span>
                        </a>
                    </li>
                    <li class="{{Request::is('forms/form-extended') ? 'active':''}}">
                        <a href="forms/form-extended" title="Extended" class="no-submenu">
                            <span class="item-text">Extended</span>
                        </a>
                    </li>
                    <li class="{{Request::is('forms/form-validation') ? 'active':''}}">
                        <a href="forms/form-validation" title="Validation" class="no-submenu">
                            <span class="item-text">Validation</span>
                        </a>
                    </li>
                    <li class="{{Request::is('forms/form-wizard') ? 'active':''}}">
                        <a href="forms/form-wizard" title="Wizard" class="no-submenu">
                            <span class="item-text">Wizard</span>
                        </a>
                    </li>
                </ul>
                <!-- END SubMenu item-->
            </li>
            <li class="{{Request::is('charts/*') ? 'active' : ''}}">
                <a href="#" title="Charts" data-toggle="collapse-next" class="has-submenu">
                    <em class="fa fa-bar-chart-o"></em>
                    <span class="item-text">Charts</span>
                </a>
                <!-- START SubMenu item-->
                <ul class="nav collapse {{Request::is('charts/*') ? 'in' : ''}}">
                    <li class="{{Request::is('charts/chart-flot') ? 'active':''}}">
                        <a href="charts/chart-flot" title="Flot" class="no-submenu">
                            <span class="item-text">Flot</span>
                        </a>
                    </li>
                    <li class="{{Request::is('charts/chart-radial') ? 'active':''}}">
                        <a href="charts/chart-radial" title="Radial" class="no-submenu">
                            <span class="item-text">Radial</span>
                        </a>
                    </li>
                </ul>
                <!-- END SubMenu item-->
            </li>
            <li class="{{Request::is('tables/*') ? 'active' : ''}}">
                <a href="#" title="Tables" data-toggle="collapse-next" class="has-submenu">
                    <em class="fa fa-table"></em>
                    <span class="item-text">Tables</span>
                </a>
                <!-- START SubMenu item-->
                <ul class="nav collapse {{Request::is('tables/*') ? 'in' : ''}}">
                    <li class="{{Request::is('tables/table-standard') ? 'active':''}}">
                        <a href="tables/table-standard" title="Standard" class="no-submenu">
                            <span class="item-text">Standard</span>
                        </a>
                    </li>
                    <li class="{{Request::is('tables/table-extended') ? 'active':''}}">
                        <a href="tables/table-extended" title="Extended" class="no-submenu">
                            <span class="item-text">Extended</span>
                        </a>
                    </li>
                    <li class="{{Request::is('tables/table-datatable') ? 'active':''}}">
                        <a href="tables/table-datatable" title="DataTables" class="no-submenu">
                            <span class="item-text">DataTables</span>
                        </a>
                    </li>
                </ul>
                <!-- END SubMenu item-->
            </li>
            <li class="nav-heading">More elements</li>
            <li class="{{Request::is('pages/*') ? 'active' : ''}}">
                <a href="#" title="Pages" data-toggle="collapse-next" class="has-submenu">
                    <em class="fa fa-file-text-o"></em>
                    <span class="item-text">Pages</span>
                </a>
                <!-- START SubMenu item-->
                <ul class="nav collapse {{Request::is('pages/*') ? 'in' : ''}}">
                    <li class="{{Request::is('pages/login') ? 'active':''}}">
                        <a href="pages/login" title="Login" class="no-submenu">
                            <span class="item-text">Login</span>
                        </a>
                    </li>
                    <li class="{{Request::is('pages/signup') ? 'active':''}}">
                        <a href="pages/signup" title="Sign up" class="no-submenu">
                            <span class="item-text">Sign up</span>
                        </a>
                    </li>
                    <li class="{{Request::is('pages/recover') ? 'active':''}}">
                        <a href="pages/recover" title="Recover Password" class="no-submenu">
                            <span class="item-text">Recover Password</span>
                        </a>
                    </li>
                    <li class="{{Request::is('pages/lock') ? 'active':''}}">
                        <a href="pages/lock" title="Lock" class="no-submenu">
                            <span class="item-text">Lock</span>
                        </a>
                    </li>
                    <li class="{{Request::is('pages/template') ? 'active':''}}">
                        <a href="pages/template" title="Starter Template" class="no-submenu">
                            <span class="item-text">Starter Template</span>
                        </a>
                    </li>
                </ul>
                <!-- END SubMenu item-->
            </li>
            <li class="{{Request::is('extras/*') ? 'active' : ''}}">
                <a href="#" title="Extras" data-toggle="collapse-next" class="has-submenu">
                    <em class="fa fa-plus"></em>
                    <span class="item-text">Extras</span>
                </a>
                <!-- START SubMenu item-->
                <ul class="nav collapse {{Request::is('extras/*') ? 'in' : ''}}">
                    <li class="{{Request::is('extras/mailbox') ? 'active':''}}">
                        <a href="extras/mailbox" title="Mailbox" class="no-submenu">
                            <span class="item-text">Mailbox</span>
                        </a>
                    </li>
                    <li class="{{Request::is('extras/timeline') ? 'active':''}}">
                        <a href="extras/timeline" title="Timeline" class="no-submenu">
                            <span class="item-text">Timeline</span>
                        </a>
                    </li>
                    <li class="{{Request::is('extras/calendar') ? 'active':''}}">
                        <a href="extras/calendar" title="Calendar" class="no-submenu">
                            <span class="item-text">Calendar</span>
                        </a>
                    </li>
                    <li class="{{Request::is('extras/invoice') ? 'active':''}}">
                        <a href="extras/invoice" title="Invoice" class="no-submenu">
                            <span class="item-text">Invoice</span>
                        </a>
                    </li>
                    <li class="{{Request::is('extras/search') ? 'active':''}}">
                        <a href="extras/search" title="Search" class="no-submenu">
                            <span class="item-text">Search</span>
                        </a>
                    </li>
                </ul>
                <!-- END SubMenu item-->
            </li>
            <!-- START Theme color options-->
            <li>
                <a href="#" title="Color options" data-toggle="collapse-next" class="has-submenu">
                    <div class="label label-purple pull-right">4</div>
                    <em class="fa fa-tint"></em>
                    <span class="item-text">Colors</span>
                </a>
                <!-- START SubMenu item-->
                <ul class="nav collapse">
                    <li>
                        <a href="#" title="Option 1" data-toggle="load-css" data-uri="css/beadmin-theme-a.css" class="no-submenu">
                            <span class="item-text">Alternative 1</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" title="Option 2" data-toggle="load-css" data-uri="css/beadmin-theme-b.css" class="no-submenu">
                            <span class="item-text">Alternative 2</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" title="Option 3" data-toggle="load-css" data-uri="css/beadmin-theme-c.css" class="no-submenu">
                            <span class="item-text">Alternative 3</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" title="Option 4" data-toggle="load-css" data-uri="css/beadmin-theme-d.css" class="no-submenu">
                            <span class="item-text">Alternative 4</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" title="Option 5" data-toggle="load-css" data-uri="css/beadmin-theme-e.css" class="no-submenu">
                            <span class="item-text">Alternative 5</span>
                        </a>
                    </li>
                </ul>
                <!-- END SubMenu item-->
            </li>
            <!-- END Theme color options-->
            <li>
                <ul class="nav-labels">
                    <li class="nav-heading">Categories</li>
                    <li class="nav-labels-item">
                        <span class="circle circle-lg circle-success"></span><a href="#">Green</a>
                    </li>
                    <li class="nav-labels-item">
                        <span class="circle circle-lg circle-danger"></span><a href="#">Red</a>
                    </li>
                    <li class="nav-labels-item">
                        <span class="circle circle-lg circle-info"></span><a href="#">Skyblue</a>
                    </li>
                    <li class="nav-labels-item">
                        <span class="circle circle-lg circle-warning"></span><a href="#">Yellow</a>
                    </li>
                </ul>
            </li>
            <!-- END Menu-->
        </ul>
    </nav>
    <!-- END Sidebar (left)-->
</aside>
<!-- End aside-->
