<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie ie6 lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="ie ie7 lt-ie9 lt-ie8"        lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="ie ie8 lt-ie9"               lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="ie ie9"                      lang="en"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-ie">
<!--<![endif]-->

<head>
    <!-- Meta-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title>BeAdmin - Bootstrap Admin Theme</title>
    <base href="{{ asset('/') }}" />
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Vendor CSS-->
    <link rel="stylesheet" href="assets/bower/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/bower/animo.js/animate-animo.css">
    <link rel="stylesheet" href="assets/bower/whirl/dist/whirl.css">

    <!-- FullCalendar -->
    <link rel='stylesheet', href='assets/bower/fullcalendar/dist/fullcalendar.min.css'>
    <link rel='stylesheet', href='assets/bower/fullcalendar/dist/fullcalendar.print.css', type="text/css", media='print'>
    <!-- Slider -->
    <link rel='stylesheet', href='assets/bower/seiyria-bootstrap-slider/dist/css/bootstrap-slider.min.css'>
    <!-- Chosen -->
    <link rel='stylesheet', href='assets/bower/chosen/chosen.css'>
    <!-- Datepicker -->
    <link rel='stylesheet', href='assets/bower/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css'>
    <!-- Codemirror -->
    <link rel='stylesheet', href='assets/bower/codemirror/lib/codemirror.css'>
    <!-- Bootstrap tags -->
    <link rel='stylesheet', href='assets/bower/bootstrap-tagsinput/dist/bootstrap-tagsinput.css'>
    <!-- Data Table styles -->
    <link rel='stylesheet', href='assets/bower/datatables/media/css/dataTables.bootstrap.min.css'>
    <link rel='stylesheet', href='assets/bower/datatables-colvis/css/dataTables.colVis.css'>
    <!-- jQuery UI -->
    @if (Request::is('elements/portlets', 'extras/calendar'))
        <link rel='stylesheet', href='assets/bower/jquery-ui/themes/ui-lightness/jquery-ui.min.css'>
    @endif
    <!-- App CSS-->
    <link rel="stylesheet" href="css/app.css">
    <!-- Modernizr JS Script-->
    <script src="assets/bower/modernizr/modernizr.custom.js" type="application/javascript"></script>
    <!-- FastClick for mobiles-->
    <script src="assets/bower/fastclick/lib/fastclick.js" type="application/javascript"></script>
</head>

<body>

    <!-- START Main wrapper-->
    <div class="wrapper">

         @include('partials.topnavbar')

         @include('partials.sidebar')

         @include('partials.offsidebar')

        <!-- START Main section-->
        <section>
            <!-- START Page content-->
            <div class="content-wrapper">
                @yield('content')
            </div>
            <!-- END Page content-->
        </section>
        <!-- END Main section-->
    </div>
    <!-- END Main wrapper-->

    <!-- START Scripts-->

    <!-- Main vendor Scripts -->
    <script src='assets/bower/jquery/dist/jquery.min.js'></script>
    <script src='assets/bower/bootstrap/dist/js/bootstrap.min.js'></script>
    <!-- Plugins -->
    <script src='assets/bower/chosen/chosen.jquery.js'></script>
    <script src='assets/bower/seiyria-bootstrap-slider/dist/bootstrap-slider.min.js'></script>
    <script src='assets/bower/bootstrap-filestyle/src/bootstrap-filestyle.min.js'></script>
    <!-- Animo -->
    <script src='assets/bower/animo.js/animo.min.js'></script>
    <!-- Sparklines -->
    <script src='assets/bower/sparkline/index.js'></script>
    <!-- Slimscroll -->
    <script src='assets/bower/slimScroll/jquery.slimscroll.min.js'></script>
    <!-- Store + JSON -->
    <script src='assets/bower/store-js/store%2Bjson2.min.js'></script>
    <!-- ScreenFull -->
    <script src='assets/bower/screenfull/dist/screenfull.min.js'></script>
    <!-- jQuery UI -->
    @if (Request::is('elements/portlets', 'extras/calendar'))
        <script src='assets/bower/jquery-ui/jquery-ui.min.js'></script>
        <script src='assets/bower/jqueryui-touch-punch/jquery.ui.touch-punch.min.js'></script>
    @endif
    <!-- MomentJs -->
    <script src='assets/bower/moment/min/moment-with-locales.min.js'></script>
    <!-- FulCalendar -->
    <script src='assets/bower/fullcalendar/dist/fullcalendar.min.js'></script>
    <!-- Markdown Area Codemirror and dependencies -->
    <script src='assets/bower/codemirror/lib/codemirror.js'></script>
    <script src='assets/bower/codemirror/addon/mode/overlay.js'></script>
    <script src='assets/bower/codemirror/mode/markdown/markdown.js'></script>
    <script src='assets/bower/codemirror/mode/xml/xml.js'></script>
    <script src='assets/bower/codemirror/mode/gfm/gfm.js'></script>
    <script src='assets/bower/marked/lib/marked.js'></script>
    <!-- MomentJs and Datepicker -->
    <script src='assets/bower/moment/min/moment-with-locales.min.js'></script>
    <script src='assets/bower/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js'></script>
    <!-- Tags input -->
    <script src='assets/bower/bootstrap-tagsinput/dist/bootstrap-tagsinput.js'></script>
    <!-- Input Mask -->
    <script src='assets/bower/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js'></script>
    <!-- Wizard -->
    <script src='assets/bower/jquery.steps/build/jquery.steps.min.js'></script>
    <script src='assets/bower/jquery-validation/dist/jquery.validate.min.js'></script>
    <!-- Data Table Scripts -->
    <script src='assets/bower/datatables/media/js/jquery.dataTables.min.js'></script>
    <script src='assets/bower/datatables/media/js/dataTables.bootstrap.min.js'></script>
    <script src='assets/bower/datatables-colvis/js/dataTables.colVis.js'></script>
    <!-- Form Validation -->
    <script src='assets/bower/parsleyjs/dist/parsley.min.js'></script>
    <!--  Flot Charts -->
    <script src='assets/bower/flot/jquery.flot.js'></script>
    <script src='assets/bower/flot.tooltip/js/jquery.flot.tooltip.js'></script>
    <script src='assets/bower/flot/jquery.flot.resize.js'></script>
    <script src='assets/bower/flot/jquery.flot.pie.js'></script>
    <script src='assets/bower/flot/jquery.flot.time.js'></script>
    <script src='assets/bower/flot/jquery.flot.categories.js'></script>
    <script src='assets/bower/flot-spline/js/jquery.flot.spline.min.js'></script>
    <!-- jVector Maps -->
    <script src="assets/bower/ika.jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="assets/bower/ika.jvectormap/jquery-jvectormap-us-mill-en.js"></script>
    <script src="assets/bower/ika.jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- Gmap -->
    <script type='text/javascript', src='//maps.google.com/maps/api/js'></script>
    <script src='assets/bower/jQuery-gMap/jquery.gmap.min.js'></script>

    <!-- App Main -->
    <script src='js/app.js'></script>

    <!-- END Scripts-->

</body>
</html>
