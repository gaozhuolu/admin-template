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
   <!-- App CSS-->
   <link rel="stylesheet" href="css/app.css">
   <link rel="stylesheet" href="css/common.css">
   <!-- Modernizr JS Script-->
   <script src="assets/bower/modernizr/modernizr.custom.js" type="application/javascript"></script>
   <!-- FastClick for mobiles-->
   <script src="assets/bower/fastclick/lib/fastclick.js" type="application/javascript"></script>
</head>

<body>
   <!-- START wrapper-->
   @yield('content')
   <!-- END wrapper-->
   <!-- START Scripts-->
   <!-- Main vendor Scripts-->
   <script src="assets/bower/jquery/dist/jquery.min.js"></script>
   <script src="assets/bower/bootstrap/dist/js/bootstrap.min.js"></script>
   <!-- Animo-->
   <script src="assets/bower/animo.js/animo.min.js"></script>
   <!-- Custom script for pages-->
   <script src="js/pages.js"></script>
   <!-- END Scripts-->
</body>

</html>