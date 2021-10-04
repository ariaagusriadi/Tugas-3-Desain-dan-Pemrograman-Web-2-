
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Code admin 
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="{{url ('public/src_backend') }}/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="{{url ('public/src_backend') }}/assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{url ('public/src_backend') }}/assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">

    <!-- side bar -->
        @include('template.backend.section.sidebar')
    <!-- end bar -->

    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
          @include('template.backend.section.navbar')
      <!-- End Navbar -->
      

      @yield('content_backend')
      
      <!-- footer -->
      @include('template.backend.section.footer')
      <!-- end footer -->

    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="{{url ('public/src_backend') }}/assets/js/core/jquery.min.js"></script>
  <script src="{{url ('public/src_backend') }}/assets/js/core/popper.min.js"></script>
  <script src="{{url ('public/src_backend') }}/assets/js/core/bootstrap.min.js"></script>
  <script src="{{url ('public/src_backend') }}/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="{{url ('public/src_backend') }}/assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="{{url ('public/src_backend') }}/assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{url ('public/src_backend') }}/assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{url ('public/src_backend') }}/assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
</body>

</html>