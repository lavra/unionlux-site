<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @stack('title')
    <!-- favicon -->
    <link rel="shortcut icon" href="http://www.unionlux.com.br/assets/images/logo/logo.png" type="image/x-icon">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <!-- Flat Icon -->
    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
    <!-- animate -->
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <!-- magnific popup -->
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <!-- AOS css -->
    <link rel="stylesheet" href="{{asset('assets/css/aos.css')}}">
    <!-- stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- responsive -->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <!-- whatsapp -->
    <link rel="stylesheet" href="{{asset('assets/css/whatsapp.css')}}">

    @stack('styles')
</head>

<body class="{{$configStore->page}}">

    @include('preloaders.loader')

    @yield('content')

    @include('footers.footer-1')
    <!-- Back to Top Start -->
    <div class="bottomtotop">
        <i class="fa fa-chevron-right"></i>
    </div>
    <!-- Back to Top End -->
    <!-- jquery -->
    <script src="{{asset('assets/js/jquery.js')}}"></script>
    <!-- popper -->
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <!-- bootstrap -->
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <!-- way poin js-->
    <script src="{{asset('assets/js/waypoints.min.js')}}"></script>
    <!-- owl carousel -->
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <!-- magnific popup -->
    <script src="{{asset('assets/js/jquery.magnific-popup.js')}}"></script>
    <!-- aos js-->
    <script src="{{asset('assets/js/aos.js')}}"></script>
    <!-- counterup js-->
    <script src="{{asset('assets/js/jquery.countdown.min.js')}}"></script>
    <!-- easing js-->
    <script src="{{asset('assets/js/jquery.easing.1.3.js')}}"></script>
    <!-- Functions -->
    <script src="{{asset('assets/js/functions.js')}}"></script>
    <!-- Contact / Newsletter-->
    <script src="{{asset('assets/js/contact.js')}}"></script>

    <!-- Map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC7eALQrRUekFNQX71IBNkxUXcz-ALS-MY&sensor=false"></script>
    <script src="{{asset('assets/js/gmap.js')}}"></script>
    <!-- Whatsapp -->
    <script src="{{asset('assets/js/custom-whatsapp.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>

    <script type="text/javascript">
        function isMobile()
        {
            return (/Android|webOS|iPhone|iPad|iPod|Windows Phone|IEMobile|Mobile|BlackBerry/i.test(navigator.userAgent) );
        }
        var elm = $('a[href*="whatsapp.com"]');
        $.each(elm, function(index, value){
            var item = $(value).attr('href');
            if(item.indexOf('chat') != -1){
                //nothing
            } else if (item.indexOf('web') != -1 && isMobile()){
                var itemLink = item;
                var newLink = itemLink.replace('web', 'api');
                $(value).attr("href", newLink);
            } else if (item.indexOf('api') != -1 && !isMobile()){
                var itemLink = item;
                var newLink = itemLink.replace('api', 'web');
                $(value).attr("href", newLink);
            }
        });
    </script>
</body>
</html>