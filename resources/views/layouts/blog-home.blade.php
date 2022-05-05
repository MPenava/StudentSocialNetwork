<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Project</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="shortcut icon" href="{{ asset('images/student.png') }}">
	<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
	<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/line-awesome.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/line-awesome-font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('lib/slick/slick.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('lib/slick/slick-theme.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
</head>


<body>
	<div class="wrapper">
		@include('includes.front_header')
		<main>
			<div class="main-section">
				<div class="container">
					<div class="main-section-data">
						<div class="row">
							@yield('content')
						</div>
					</div><!-- main-section-data end-->
				</div>
			</div>
		</main>


	</div>
	<!--theme-layout end-->



	<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/popper.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.mCustomScrollbar.js') }}"></script>
	<script type="text/javascript" src="{{ asset('lib/slick/slick.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/scrollbar.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>

	@yield('scripts')



</body>

</html>