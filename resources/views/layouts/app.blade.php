<!doctype html>
<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!--plugins-->
    <link href="{{asset('public/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" >
    <link href="{{asset('public/assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet">
    <!-- loader-->
	  <link href="{{asset('public/assets/css/pace.min.css')}}" rel="stylesheet">
	  <script src="{{asset('public/assets/js/pace.min.js')}}"></script>
    <!--Styles-->
    <link href="{{asset('public/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('public/assets/css/icons.css')}}" >

    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="{{asset('public/assets/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('public/assets/css/dark-theme.css')}}" rel="stylesheet">
    <link href="{{asset('public/assets/css/semi-dark-theme.css')}}" rel="stylesheet">
    <link href="{{asset('public/assets/css/minimal-theme.css')}}" rel="stylesheet">
    <link href="{{asset('public/assets/css/shadow-theme.css')}}" rel="stylesheet">
     
  </head>
  <body>

    <!--start header-->
     @include('layouts.header')
     <!--end sidebar-->


    <!--start main content-->
    @yield('content')
     
     <!--end main content-->
 

    


   <!--plugins-->
   <script src="{{asset('public/assets/js/jquery.min.js')}}"></script>
   <script src="{{asset('public/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
   <script src="{{asset('public/assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
   <script src="{{asset('public/assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
   <script src="{{asset('public/assets/plugins/apex/apexcharts.min.js')}}"></script>
   <script src="{{asset('public/assets/js/index.js')}}"></script>
    <!--BS Scripts-->
    <script src="{{asset('public/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('public/assets/js/main.js')}}"></script>
  </body>
</html>