@extends('frontend.home.view')
@section('home')

<style>
    /* Custom CSS for fixing image dimensions */
    .project-two__single-img img {
        width: 90px; /* Set the image width to 90px */
        height: 250px; /* Maintain the aspect ratio */
        max-height: 300px; /* Set a maximum height to prevent very tall images */
    }

    /* Custom CSS for pagination */
    .styled-pagination {
        list-style: none;
        padding: 0;
        margin: 20px 0;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .styled-pagination li {
        margin: 0 5px;
    }

    .styled-pagination a {
        display: flex;
        text-decoration: none;
        background-color: #f4f4f4;
        color: #333;
        border-radius: 5px;
    }

    .styled-pagination .active a {
        background-color: #007bff;
        color: #fff;
    }

    .styled-pagination .next a, .styled-pagination .prev a {
        background-color: #007bff;
        color: #fff;
    }

    .styled-pagination .disabled a {
        background-color: #f4f4f4;
        color: #333;
        cursor: not-allowed;
    }

    .pagination-icons {
        margin-right: 5px;
    }
</style>

@php
$setting = DB::table('settings')->first();
$index = 1;   
@endphp

<section class="page-header">
    <div class="page-header__bg" style="background-image: url({{ (!empty($setting->ico)) ? url('backend/all-images/web/all/'.$setting->ico) : url('assets/img/slider/slider-v2-img'.$index.'.jpg') }})">
    </div>
    <div class="container">
        <div class="page-header__inner text-center">
                <h2>Office Location</h2>
            <ul class="thm-breadcrumb">
                <li><a href="/">Home</a></li>
                <li><span class="icon-right-arrow-5"></span></li>
                <li>Office Location</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Header-->



<!--Start Services Three-->
<section class="services-three services-three--services">
    <div class="container">
        <div class="row">
            @foreach ($allData as $index => $team)
            <!--Start Services Three Single-->
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="services-three__single">

                    <div class="services-three__single-content">
                        <div class="services-three__single-content-inner">
                            <p align="center"><b>{{ $team->name }}</b></p>
                            <br/>
                            <p><b>Address :</b> {{ $team->address }}</p>
                            <p><b>Mobile :</b> {{ $team->mobile }} , {{ $team->phone }}</p>
                            <p><b>Email :</b> {{ $team->email }}</p>
                            @if(isset($team->time))
                            <p><b>Office Time:</b> {{ $team->time }}</p>
                            @endif
                            <div class="count-box">
                                {{$index + 1}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Services Three Single-->
            @endforeach
        </div>
    </div>
</section>
<!--End Services Three-->

@endsection
