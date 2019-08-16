<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('css/dark.css') }}" type="text/css">

	<!-- Travel Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{ asset('css/travel.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('css/datepicker.css') }}" type="text/css">
	<!-- / -->

	<link rel="stylesheet" href="{{ asset('css/font-icons.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" type="text/css">

	<link rel="stylesheet" href="{{ asset('css/responsive.css') }}" type="text/css">
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>Travel</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		@yield('content')

	</div><!-- #wrapper end -->

		@yield('go-to-top')

	<!-- External JavaScripts
	============================================= -->
	<script src="{{ asset('js/jquery.js') }}"></script>
	<script src="{{ asset('lib/jquery-ui/js/jquery-ui.js') }}"></script>
	<script src="{{ asset('js/plugins.js') }}"></script>

	<!-- Travel Demo Specific Script -->
	<script src="{{ asset('js/datepicker.js') }}"></script>
	<!-- / -->

	<!-- Footer Scripts
	============================================= -->
	<script src="{{ asset('js/functions.js') }}"></script>

	@yield('script')

</body>
</html>