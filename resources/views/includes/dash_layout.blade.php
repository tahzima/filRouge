<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
  تعاونية  الحسنية
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="{{ asset('./assets/css/material-dashboard.css?v=2.1.2')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css">
  <link href="{{ asset('./assets/demo/demo.css')}}" rel="stylesheet" />
</head>

<body  class="bg-secondary">
    <div class="wrapper bg-secondary">
        @include('includes.sidebar')
            <div class="main-panel">
                @include('includes.navbar-h')
                <div class="content">
                    @yield('content')
                </div>
            </div>
            
    </div>
    
  <!--   Core JS Files   -->
  <script src="{{asset('./assets/js/core/jquery.min.js')}}"></script>
  <script src="{{asset('./assets/js/core/popper.min.js')}}"></script>
  <script src="{{asset('./assets/js/core/bootstrap-material-design.min.js')}}"></script>
  <script src="{{asset('./assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>

  <!--  Plugin for Sweet Alert -->
  <script src="{{asset('./assets/js/plugins/sweetalert2.js')}}"></script>
  <!-- Forms Validations Plugin -->
  <script src="{{asset('./assets/js/plugins/jquery.validate.min.js')}}"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="{{asset('./assets/js/plugins/jquery.bootstrap-wizard.js')}}"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="{{asset('./assets/js/plugins/bootstrap-selectpicker.js')}}"></script>


  <!-- Chartist JS -->
  <script src="./assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="./assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>
  <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
</body>

</html>
