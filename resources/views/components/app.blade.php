<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Propertybook Assessment | By Tatenda Marvelous Chimusoro</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
       
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/img/ico/apple-icon-60.html') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/ico/apple-icon-76.html') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/img/ico/apple-icon-120.html') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/img/ico/apple-icon-152.html') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/ico/favicon.ico') }}">
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/img/ico/favicon-32.png') }}">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">

<link rel="stylesheet" type="text/css" href="{{ asset('cart.css') }}">
     <script src="{{ asset('cart.js') }}"></script>

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900%7CMontserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/feather/style.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/simple-line-icons/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/perfect-scrollbar.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/prism.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/app.css') }}">

     
    
</head>
<body >
    <div class="wrapper " class="fill" style=" background-image:url({{asset('gym/images/b3.jpg')}})">
        <nav class="navbar navbar-expand-md navbar-light bg-dark shadow-sm">
            <div class="container">  <div class="logo pull-left"><a href="/">

              <img style="max-width:80px;" src="{{ asset('logo.png') }}" alt=""><span class="text-white text-bold" style="font-weight:bold; font-size:1.7rem;">Business</span>
              </a></div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    
                    <ul class="navbar-nav me-auto col-md-6">

                    </ul>

               
                </div>
            </div>
        </nav>

        <main class="py-4">
           {{$slot}}
        </main>
    </div>

    
    <!-- BEGIN VENDOR JS-->
    <script src="{{ asset('assets/vendors/js/core/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/prism.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/jquery.matchHeight-min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/screenfull.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/js/pace/pace.min.js') }}"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CONVEX JS-->
    <script src="{{ asset('assets/js/app-sidebar.js') }}"></script>
    <script src="{{ asset('assets/js/notification-sidebar.js') }}"></script>
    <!-- END CONVEX JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
</body>
</html>
