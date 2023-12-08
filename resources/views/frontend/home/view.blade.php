<!doctype html>
<html class="no-js" lang="en">

@php
$setting = DB::table('settings')->first();  
@endphp

<head>

   @include('frontend.code-section.js.head.fuji')

</head>

<body class="body-dark-bg">

    <!-- preloader -->
   <!-- <div id="preloader">
        <div id="loading-center">
            <div class="loader">
                <div class="loader-outter"></div>
                <div class="loader-inner"></div>
            </div>
        </div>
    </div>-->
    <!-- preloader-end -->

    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="icon-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <div class="fix">

        @include('frontend.pagelayer.body.header')

        @yield('home')

        
        <!--End Main Slider One-->

        @include('frontend.pagelayer.body.footer')


    </div>

    @include('frontend.code-section.js.main.elevator')





</body>

</html>