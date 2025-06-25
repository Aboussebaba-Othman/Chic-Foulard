<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Noraure | Home 2</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">
        <!-- favicon
        ============================================ -->		
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">        <!-- Google Fonts
        ============================================ -->	
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet" type="text/css">
        <!-- all css here -->
        <!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <!-- animate css -->
        <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
        <!-- jquery-ui.min css -->
        <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}">
        <!-- meanmenu css -->
        <link rel="stylesheet" href="{{ asset('css/meanmenu.min.css') }}">
        <!-- owl.carousel css -->        <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
        <!-- nivo slider CSS
        ============================================ -->
        <link rel="stylesheet" href="{{ asset('lib/css/nivo-slider.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('lib/css/preview.css') }}" type="text/css" media="screen">
        <!-- font-awesome css -->
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
        <!-- Font Standardization - MUST BE LOADED BEFORE other styles -->
        <link rel="stylesheet" href="{{ asset('css/font-standardization.css') }}">
        <!-- style css -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <!-- responsive css -->        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">        <!-- Articles management css -->
        <link rel="stylesheet" href="{{ asset('css/articles.css') }}">
         <!-- Custom logo styles -->
        <link rel="stylesheet" href="{{ asset('css/custom-logo.css') }}">
        <!-- Blog image sizes css -->
        <link rel="stylesheet" href="{{ asset('css/blog-images.css') }}">
        <!-- Slider custom styles -->
        <link rel="stylesheet" href="{{ asset('css/slider-custom.css') }}">

        <link rel="stylesheet" href="{{ asset('css/temoignages.css') }}">                <link rel="stylesheet" href="{{ asset('css/notreHestoire.css') }}">
        <!-- Footer styles -->
        <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
        

        <!-- modernizr css -->
        <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    </head>
    <body>

        @include('layout.header')

        @yield('content')

        @include('layout.footer')



    </body>
</html>