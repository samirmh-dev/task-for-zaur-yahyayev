<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Slim">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/slim/img/slim-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/slim">
    <meta property="og:title" content="Slim">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/slim/img/slim-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/slim/img/slim-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Slim Responsive Bootstrap 4 Admin Template</title>

    <!-- vendor css -->
    <link href="{{ asset('lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/Ionicons/css/ionicons.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/chartist/css/chartist.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/rickshaw/css/rickshaw.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/jt.timepicker/css/jquery.timepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/spectrum/css/spectrum.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/bootstrap-tagsinput/css/bootstrap-tagsinput.css') }}" rel="stylesheet">

    <!-- Slim CSS -->
    <link rel="stylesheet" href="{{ asset('css/slim.css') }}">

  </head>
  <body>
    <div class="slim-header">
      <div class="container">
        <div class="slim-header-right">
          <div class="dropdown dropdown-c">
            <a href="#" class="logged-user" data-toggle="dropdown">
              <img src="http://via.placeholder.com/500x500" alt="">
              <span>Katherine</span>
              <i class="fa fa-angle-down"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <nav class="nav">
                <a href="page-signin.html" class="nav-link"><i class="icon ion-forward"></i> Sign Out</a>
              </nav>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </div><!-- header-right -->
      </div><!-- container -->
    </div><!-- slim-header -->

    <div class="slim-navbar">
      <div class="container">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('flight.index') }}">
              <span>Flight</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('hotel.index') }}">
              <span>Hotel</span>
            </a>
          </li>
        </ul>
      </div><!-- container -->
    </div><!-- slim-navbar -->

    <div class="slim-mainpanel">
      <div class="container">
        <div class="slim-pageheader" style="display: block">
          <h6 class="slim-pagetitle">Form Elements</h6>
        </div>
        <div class="section-wrapper">
        
          @yield('content')

        </div><!-- section-wrapper -->
      </div><!-- container -->
    </div><!-- slim-mainpanel -->
    <div class="slim-footer">
      <div class="container">
        <p>Copyright 2018 &copy; All Rights Reserved. Slim Dashboard Template</p>
        <p>Designed by: <a href="">ThemePixels</a></p>
      </div><!-- container -->
    </div><!-- slim-footer -->

    <script src="{{ asset('lib/jquery/js/jquery.js') }}"></script>
    <script src="{{ asset('lib/popper.js/js/popper.js') }}"></script>
    <script src="{{ asset('lib/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('lib/jquery.cookie/js/jquery.cookie.js') }}"></script>
    <!--<script src="{{ asset('lib/chartist/js/chartist.js') }}"></script>-->
    <script src="{{ asset('lib/d3/js/d3.js') }}"></script>
    <!--<script src="{{ asset('lib/rickshaw/js/rickshaw.min.js') }}"></script>-->
    <script src="{{ asset('lib/jquery.sparkline.bower/js/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('lib/jquery-toggles/js/toggles.min.js') }}"></script>
    <script src="{{ asset('lib/jt.timepicker/js/jquery.timepicker.js') }}"></script>
    <script src="{{ asset('lib/spectrum/js/spectrum.js') }}"></script>
    <script src="{{ asset('lib/jquery.maskedinput/js/jquery.maskedinput.js') }}"></script>
    <script src="{{ asset('lib/bootstrap-tagsinput/js/bootstrap-tagsinput.js') }}"></script>
    <script src="{{ asset('lib/jquery-ui/js/jquery-ui.js') }}"></script>

    <script src="{{ asset('js/ResizeSensor.js') }}"></script>
    <!--<script src="{{ asset('js/dashboard.js') }}"></script>-->
    <script src="{{ asset('js/slim.js') }}"></script>

    <script>
      $(function(){
        'use strict'

        // Toggles
        $('.toggle').toggles({
          on: true,
          height: 26
        });

        // Input Masks
        $('#dateMask').mask('99/99/9999');
        $('#phoneMask').mask('(999) 999-9999');
        $('#ssnMask').mask('999-99-9999');

         // Datepicker
        $('.fc-datepicker').datepicker({
          showOtherMonths: true,
          selectOtherMonths: true,
        });
        $('.fc-datepicker').datepicker("option", "dateFormat", "yy-mm-dd");

        @isset($flight)
          $('.fc-datepicker').val("{{ $flight->arrival_date }}");
        @endisset
        @if(old('arrival_date') !== null)
          $('.fc-datepicker').val("{{ old('arrival_date') }}");
        @endif

        // Time Picker
        $('#tpBasic').timepicker();
        $('#tp2').timepicker({'scrollDefault': 'now'});
        $('#tp3').timepicker();

        $('#setTimeButton').on('click', function (){
          $('#tp3').timepicker('setTime', new Date());
        });

        // Color picker
        $('#colorpicker').spectrum({
          color: '#17A2B8'
        });

        $('#showAlpha').spectrum({
          color: 'rgba(23,162,184,0.5)',
          showAlpha: true
        });

        $('#showPaletteOnly').spectrum({
            showPaletteOnly: true,
            showPalette:true,
            color: '#DC3545',
            palette: [
                ['#1D2939', '#fff', '#0866C6','#23BF08', '#F49917'],
                ['#DC3545', '#17A2B8', '#6610F2', '#fa1e81', '#72e7a6']
            ]
        });

      });
    </script>
  </body>
</html>
