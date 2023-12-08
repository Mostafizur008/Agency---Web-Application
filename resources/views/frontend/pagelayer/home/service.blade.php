@extends('frontend.home.view')
@section('home')

<style>
    /* Custom CSS for fixing image dimensions */
    .project-two__single-img img {
        width: 260px; /* Set the image width to 90px */
        height: 380px; /* Maintain the aspect ratio */
        max-height: 450px; /* Set a maximum height to prevent very tall images */
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
                <h2>Our Service</h2>
            <ul class="thm-breadcrumb">
                <li><a href="/">Home</a></li>
                <li><span class="icon-right-arrow-5"></span></li>
                <li>Our Service</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Header-->



<!--Start Services Three-->
<section class="services-three services-three--services">
    <div class="container">
        <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="nav flex-column nav-pills nav-pills-tab" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                        <a class="nav-link active show mb-1" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home"
                                            aria-selected="true">
                                            <b># Services</b></a>
                                        <a class="nav-link mb-1" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
                                            aria-selected="false">
                                            <b># Certification</b></a>
                                    </div>
                                </div> <!-- end col-->
                                <div class="col-sm-9">
                                    <div class="tab-content pt-0">
                                        <div class="tab-pane fade active show" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                            @foreach ($allData as $index => $team)
                                            @if($team->status == '1')
                                            <p class="sub-title"><b>{{$team->title}} :</b></p><br/>
                                            <p>{!! $team->summery !!}</p> <br/>
                                            @endif
                                            @endforeach
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                         
                                                    <div class="row">
                                                        @foreach ($allData as $index => $team)
                                                        <!--Start Services Three Single-->
                                                        <div class="col-xl-4 col-lg-4 col-md-6">
                                                            <div class="services-three__single">
                                                                <div class="project-two__single-img img">
                                                                    <div class="inner">
                                                                        @if(isset($team->image))
                                                                        <div class="card">
                                                                        <img src="{{ (!empty($team->image)) ? url('backend/all-images/web/channel/'.$team->image) : url('assets/img/slider/slider-v2-img'.$index.'.jpg') }}" alt="">
                                                                        </div>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--End Services Three Single-->
                                                        @endforeach
                                                    </div>
                                        </div>
                                    </div>
                                </div> <!-- end col-->
                            </div> <!-- end row-->
                        </div>
                    </div> <!-- end card-->
                </div> <!-- end col -->
</section>
<!--End Services Three-->

@endsection
