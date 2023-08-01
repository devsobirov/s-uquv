<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Sanoat o'quv Kasb maktabi" />
    <meta name="viewport" content=" width=device-width, initial-scale=1, maximum-scale=2" />
    <title>Sanoat o'quv &#8211; Kasb maktabi </title>

    <!-- favicon icon -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" />

    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}" />

    <!-- fontawesome -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.css')}}" />

    <!-- themify -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/themify-icons.css')}}" />

    <!-- flaticon -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/flaticon.css')}}" />

    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick.css')}}" />

    <!-- prettyphoto -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/prettyPhoto.css')}}" />

    <!-- shortcodes -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/shortcodes.css')}}" />

    <!-- main -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/main.css')}}" />

    <!-- main -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/megamenu.css')}}" />

    <!-- responsive -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}" />

    <!-- Custom styles for this Page-->
    @yield('custom_styles')

</head>
<body>

<!--page start-->
<div class="page">


    @include('layouts.includes.header')

    @yield('content')

    @include('layouts.includes.footer')

</div>
<!-- page end -->


    <!-- Javascript -->

    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/tether.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.easing.js')}}"></script>
    <script src="{{asset('assets/js/jquery-waypoints.js')}}"></script>
    <script src="{{asset('assets/js/jquery-validate.js')}}"></script>
    <script src="{{asset('assets/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('assets/js/slick.min.js')}}"></script>
    <script src="{{asset('assets/js/numinate.min.js')}}"></script>
    <script src="{{asset('assets/js/imagesloaded.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-isotope.js')}}"></script>
    <script src="{{asset('assets/js/lazysizes.min.js')}}"></script>
    <script src="{{asset('assets/js/circle-progress.min.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
    <!-- Javascript end-->

    <!-- Page level custom scripts -->
    @yield('custom_scripts')

</body>
</html>
