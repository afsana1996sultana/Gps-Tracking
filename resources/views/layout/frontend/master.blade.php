
<!doctype html>
<html lang="en">
    <head>
        <title>SeeMove Ltd.</title>
        <meta name="keywords" content="seemove">
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- Favicons -->
        <link rel="shortcut icon" href="{{url('frontend/image/seemove_icon.png')}}" type="image/x-icon">
        <link rel="icon" href="{{url('frontend/image/seemove_icon.png')}}" type="image/x-icon">

        <!-- Stylesheets -->
        <link rel="stylesheet" href="{{url('frontend/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{url('frontend/css/style.min.css')}}">
        <link rel="stylesheet" href="{{url('frontend/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{url('frontend/css/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="{{url('frontend/css/responsive.css')}}">
        
        <!-- Stylesheets -->
        <link href="{{url('frontend/css/style1.css')}}" rel="stylesheet" type="text/css">
        <link href="{{url('frontend/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;1,100;1,200;1,300;1,400;1,500&amp;display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="{{url('frontend/css/custom.css')}}" rel="stylesheet" type="text/css">
    </head>
<body>
    <!--header area start-->
    @include("layout.frontend.header")
    <!--header area end-->

    <!--home section four area start-->
    @yield('main_content')
    <!--home section four area end-->

    <!--footer area start-->
    @include("layout.frontend.footer")
    <!--footer area end-->
    <!-- JS
   =========================================== -->
   <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
   <div class="go-top"><i class='bx bx-up-arrow-alt'></i></div>

   <!-- javascript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{url('frontend/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{url('frontend/js/popper.min.js')}}" defer></script>
    <script src="{{url('frontend/js/bootstrap.min.js')}}" defer></script>
    <script src="{{url('frontend/js/active.js')}}" defer></script>
    <script src="{{url('frontend/js/scripts.js')}}" defer></script>
    <script src="{{url('frontend/js/zeynep.js')}}" defer></script>
    <script src="{{url('frontend/js/owl.carousel.min.js')}}" defer></script>
    <script src="{{url('frontend/js/sm-validation.js')}}"></script>
    <script src="{{url('frontend/js/main.js')}}"></script>
    <!-- <script src="{{url('frontend/js/doodle_digital1.js')}}"></script> -->
</body>
</html>