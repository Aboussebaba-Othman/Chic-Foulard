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
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">
        <!-- Google Fonts
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
        <!-- style css -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <!-- responsive css -->
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
        <!-- Articles management css -->        <link rel="stylesheet" href="{{ asset('css/articles.css') }}">        <!-- modernizr css -->        <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>
        <!-- TinyMCE CDN -->
        <script src="https://cdn.tiny.cloud/1/p0rlpscsaf765bwpo18hi3jlt37lkujdrf0ywf0haodnmzst/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
        <!-- CSS personnalisé pour TinyMCE -->
        <style>
            .tox-tinymce {
                border: 1px solid #ced4da !important;
            }
            /* Fix pour les boîtes de dialogue de TinyMCE */
            .tox {
                z-index: 1000;
            }
        </style>
    </head>
    <body>

        @include('layout.header')

        @yield('content')        @include('layout.footer')

        <!-- all js here -->
        <!-- jquery latest version -->
        <script src="{{ asset('js/vendor/jquery-1.12.0.min.js') }}"></script>
        <!-- bootstrap js -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <!-- owl.carousel js -->
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <!-- jquery-ui js -->
        <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
        <!-- meanmenu js -->
        <script src="{{ asset('js/jquery.meanmenu.js') }}"></script>        <!-- wow js -->
        <script src="{{ asset('js/wow.min.js') }}"></script>
        <!-- main js -->
        <script src="{{ asset('js/main.js') }}"></script>
        <!-- TinyMCE configuration -->
        <script src="{{ asset('js/tinymce-config.js') }}"></script>
        
        @yield('scripts')
    </body>
</html>