   
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>{{$setting->title}} | {{$setting->description}}</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="{{ (!empty($setting->photo)) ? url('backend/all-images/web/logo/icon/'.$setting->photo) : url('backend/all-images/web/default/logo.png') }}">

    <!-- Place favicon.ico in the root directory -->



    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/custom-animate.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/jquery.magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/nouislider.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/nouislider.pips.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/odometer.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/swiper.min.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/color-1.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/responsive.css')}}">
    <style>
        .icon-out-call {
            color: #0dcaf0;
        }
    </style>
