<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <title>Al-Meezan Industrial Meterology Services</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <link rel="icon" href="{{url('assets/images/favicon.ico')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{url('assets/css/fontawesome.css')}}" />
    <link rel="stylesheet" href="{{url('assets/css/templatemo-scholar.css')}}" />
    <link rel="stylesheet" href="{{url('assets/css/owl.css')}}" />
    <link rel="stylesheet" href="{{url('assets/css/animate.css')}}" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
</head>

<body>

<div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>
@include('layout.header')
@yield('content')

<footer>
    <div class="container">
        <div class="col-lg-12">
            <p>Copyright © <?php echo date('Y')?> aimscal.com</a></p>
        </div>
    </div>
</footer>

<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
<script src="{{url('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{url('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{url('assets/js/isotope.min.js')}}"></script>
<script src="{{url('assets/js/owl-carousel.js')}}"></script>
<script src="{{url('assets/js/counter.js')}}"></script>
<script src="{{url('assets/js/custom.js')}}"></script>
</body>
</html>
