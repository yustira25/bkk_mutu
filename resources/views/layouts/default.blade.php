<!doctype html>
<html lang="en">
<head>
        
        
        <meta charset="utf-8" />
        <title>BKK SMK MUTU</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content=" " />
        <meta name="keywords" content="" />
        <meta content="Themesdesign" name="author" />

        <!-- App favicon -->
        {{-- <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}"> --}}

        <!-- Choise Css -->
        <link rel="stylesheet" href="{{ asset('assets/libs/choices.js/public/assets/styles/choices.min.css') }}">

        <!-- Swiper Css -->
        <link rel="stylesheet" href="{{ asset('assets/libs/swiper/swiper-bundle.min.css') }}">

        <link rel="stylesheet" href="{{ asset('assets/icons/v3.0.0/css/line.css') }}">

        <!-- Bootstrap Css -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        {{-- <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" /> --}}
        <!-- App Css-->
        <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
        <!--Custom Css-->

    </head>

    <body>
        @include('sweetalert::alert')

         <!--start page Loader -->
         {{-- <div id="preloader">
            <div id="status">
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                  </ul>
            </div>
        </div> --}}
        <!--end page Loader -->

        <!-- Begin page -->

        @yield('main-content')
       
        <!-- END layout-wrapper -->

        <!-- JAVASCRIPT -->
        <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        {{-- <script src="{{ asset('assets/icons/v4.0.0/script/monochrome/bundle.js') }}"></script> --}}


        <!-- Choice Js -->
        <script src="{{ asset('assets/libs/choices.js/public/assets/scripts/choices.min.js') }}"></script>
        
        <!-- Swiper Js -->
        <script src="{{ asset('assets/libs/swiper/swiper-bundle.min.js') }}"></script>

        <!-- Index Js -->
        <script src="{{ asset('assets/js/pages/job-list.init.js') }}"></script>

        <!-- Switcher Js -->
        {{-- <script src="{{ asset('assets/js/pages/switcher.init.js') }}"></script> --}}

        <script src="{{ asset('assets/js/pages/index.init.js') }}"></script>
        
        <!-- App Js -->
        <script src="{{ asset('assets/js/app.js') }}"></script>

    </body>
</html>
