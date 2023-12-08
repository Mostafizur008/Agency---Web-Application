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
            <h2>Our Client</h2>
            <ul class="thm-breadcrumb">
                <li><a href="/">Home</a></li>
                <li><span class="icon-right-arrow-5"></span></li>
                <li>Our Client</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Header-->

<!--Start Project Two-->
<section class="project-two project-two--project">
    <div class="container">
        <div class="row">
            @foreach ($allData as $index => $team)
                @if($team->status == '1')
                    <!--Start Project Two Single-->
                    <div class="col-xl-3 col-lg-3 wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                        <div class="project-two__single">
                            <div class="project-two__single-img">
                                <div class="inner">
                                    <img src="{{ (!empty($team->image)) ? url('backend/all-images/web/channel/'.$team->image) : url('assets/img/slider/slider-v2-img'.$index.'.jpg') }}" alt="">
                                    <div class="overlay-content">
                                        <h2><a href="project-details.html">{{ $team->title }}</a></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Project Two Single-->
                @endif
            @endforeach
        </div>

        <ul class="styled-pagination clearfix">
            {{ $allData->links('vendor.pagination.default') }}
        </ul>

    </div>
</section>
<!--End Project Two-->


@endsection