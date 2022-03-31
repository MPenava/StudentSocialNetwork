<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Target Material Design Bootstrap Admin Template</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('materialize/css/materialize.min.css')}}" media="screen,projection" />
    <!-- Bootstrap Styles-->
    <link href="{{asset('css/css/bootstrap.css')}}" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{asset('css/css/font-awesome.css')}}" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="{{asset('js/js/morris/morris-0.4.3.min.css')}}" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="{{asset('css/css/custom-styles.css')}}" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="{{asset('js/js/Lightweight-Chart/cssCharts.css')}}">
</head>

<body>
    <div id="wrapper">
        <!-- Navigation -->
        @include('includes.admin_nav')

        <!-- Dropdown Structure -->
        <ul id="dropdown1" class="dropdown-content">
            <li>
                <a href="#"><i class="fa fa-user fa-fw"></i> My Profile</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
            </li>
        </ul>

        <!--/. NAV TOP  -->
        @include('includes.admin_top_nav')
        <!-- /. NAV SIDE  -->

        @yield('content')
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="{{asset('js/js/jquery-1.10.2.js')}}"></script>

    <!-- Bootstrap Js -->
    <script src="{{asset('js/js/bootstrap.min.js')}}"></script>

    <script src="{{asset('materialize/js/materialize.min.js')}}"></script>

    <!-- Metis Menu Js -->
    <script src="{{asset('js/js/jquery.metisMenu.js')}}"></script>
    <!-- Morris Chart Js -->
    <script src="{{asset('js/js/morris/raphael-2.1.0.min.js')}}"></script>
    <script src="{{asset('js/js/morris/morris.js')}}"></script>


    <script src="{{asset('js/js/easypiechart.js')}}"></script>
    <script src="{{asset('js/js/easypiechart-data.js')}}"></script>

    <script src="{{asset('js/js/Lightweight-Chart/jquery.chart.js')}}"></script>

    <!-- Custom Js -->
    <script src="{{asset('js/js/custom-scripts.js')}}"></script>


</body>

</html>