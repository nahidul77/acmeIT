<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Amber IT Ltd | High Speed Broadband Internet Service Provider in Bangladesh</title>
    <meta charset="UTF-8">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/ico" href="img/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="We provide nationwide top home & corporate internet packages with an extensive range of high quality data & internet connectivity services. We offer safe internet access with various service level.">

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/icomoon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/swiper.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/slider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/switcher.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/SolaimanLipi.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/styles.css') }}" id="colors">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/custom.css') }}">
    <link href="{{asset('frontend/css.css')}}?family=Fira+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">


<!-- Global site tag (gtag.js')}}) - Google Analytics -->
<script async="" src="{{asset('frontend/gtag/js.js')}}?id=UA-140814081-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-140814081-1');
</script>
    
</head>
<body>

<!-- Preloader Start-->
<div id="preloader">
    <div class="row loader">
        <div class="loader-icon"></div>
    </div>
</div>
<!-- Preloader End -->

<!-- Top-Bar START -->
@include('frontend.layouts.topbar')
<!-- Top-Bar END -->


<!-- Navbar START -->
@include('frontend.layouts.navbar')
<!-- Navbar END -->

@yield('content')

<!-- Footer START -->
@include('frontend.layouts.footer')
<!-- Footer END -->


<!-- Scroll to top button Start -->
<a href="#" class="scroll-to-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
<!-- Scroll to top button End -->



<!-- Jquery -->
<script src="{{asset('frontend/js/jquery.min.js')}}"></script>
<script src="{{asset('frontend/js/popper.min.js')}}"></script>
<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/js/owl.carousel.js')}}"></script>
<script src="{{asset('frontend/js/navigation.js')}}"></script>
<script src="{{asset('frontend/js/navigation.fixed.js')}}"></script>
<script src="{{asset('frontend/js/wow.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('frontend/js/waypoints.min.js')}}"></script>
<script src="{{asset('frontend/js/tabs.min.js')}}"></script>
<script src="{{asset('frontend/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('frontend/js/swiper.min.js')}}"></script>
<script src="{{asset('frontend/js/jquery.mb.YTPlayer.min.js')}}"></script>
<script src="{{asset('frontend/js/modernizr.js')}}"></script>
<script src="{{asset('frontend/js/switcher.js')}}"></script>
<script src="{{asset('frontend/js/map.js')}}"></script>
<script src="{{asset('frontend/js/main.js')}}"></script>
<script src="{{asset('frontend/js/validation.min.js')}}"></script>
<script src="{{asset('frontend/js/script.js')}}"></script>
<script type="text/javascript">
    $(window).on('load',function(){
        $('#successModal').modal('show');
    });
</script>
</body>
</html>
