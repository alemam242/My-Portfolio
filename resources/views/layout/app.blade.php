<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{-- <link rel="icon" href="{{ asset('assets/img') }}//favicon.png" type="image/png"> --}}
    <title>Alemam | Home</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css') }}//bootstrap.css">
    <link rel="stylesheet" href="{{ asset('assets/vendors') }}//linericon/style.css">
    <link rel="stylesheet" href="{{ asset('assets/css') }}//font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css') }}//fontawesome.min.css">
    <link rel="stylesheet" href="{{ asset('assets/vendors') }}//owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('assets/vendors') }}//lightbox/simpleLightbox.css">
    <link rel="stylesheet" href="{{ asset('assets/vendors') }}//nice-select/css/nice-select.css">
    <link rel="stylesheet" href="{{ asset('assets/vendors') }}//animate-css/animate.css">
    <link rel="stylesheet" href="{{ asset('assets/vendors') }}//flaticon/flaticon.css">
    <!-- main css -->
    <link rel="stylesheet" href="{{ asset('assets/css') }}//style.css">
    <link rel="stylesheet" href="{{ asset('assets/css') }}//responsive.css">

</head>

<body>

    <!--================Header Menu Area =================-->
    @include('components.header')

    <!--================Home Banner Area =================-->
    @yield('section')
    <!--================End Home Banner Area =================-->



    @include('components.footer')





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('assets/js') }}//jquery-3.2.1.min.js"></script>
    <script src="{{ asset('assets/js') }}//popper.js"></script>
    <script src="{{ asset('assets/js') }}//bootstrap.min.js"></script>
    <script src="{{ asset('assets/js') }}//fontawesome.min.js"></script>
    <script src="{{ asset('assets/js') }}//stellar.js"></script>
    <script src="{{ asset('assets/vendors') }}//lightbox/simpleLightbox.min.js"></script>
    <script src="{{ asset('assets/vendors') }}//nice-select/js/jquery.nice-select.min.js"></script>
    <script src="{{ asset('assets/vendors') }}//isotope/imagesloaded.pkgd.min.js"></script>
    <script src="{{ asset('assets/vendors') }}//isotope/isotope-min.js"></script>
    <script src="{{ asset('assets/vendors') }}//owl-carousel/owl.carousel.min.js"></script>
    <script src="{{ asset('assets/js') }}//jquery.ajaxchimp.min.js"></script>
    <script src="{{ asset('assets/vendors') }}//counter-up/jquery.waypoints.min.js"></script>
    <script src="{{ asset('assets/vendors') }}//counter-up/jquery.counterup.min.js"></script>
    <script src="{{ asset('assets/js') }}//mail-script.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="{{ asset('assets/js') }}//gmaps.min.js"></script>
    <script src="{{ asset('assets/js') }}//theme.js"></script>
</body>

</html>
