@extends('frontend.home.view')
@section('home')

@php
$setting = DB::table('settings')->first(); 
$about = DB::table('abouts')->first(); 
$index = 1; 
@endphp 

<section class="page-header">
    <div class="page-header__bg" style="background-image: url({{ (!empty($setting->ico)) ? url('backend/all-images/web/all/'.$setting->ico) : url('assets/img/slider/slider-v2-img'.$index.'.jpg') }})">
    </div>
    <div class="container">
        <div class="page-header__inner text-center">
            <h2>Team Member</h2>
            <ul class="thm-breadcrumb">
                <li><a href="/">Home</a></li>
                <li><span class="icon-right-arrow-5"></span></li>
                <li>Team Member</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Header-->

<!--Start Team Two-->
<section class="team-two">
    <div class="container">
        <div class="swiper-container team-two__slider">
            <div class="swiper-wrapper">
                @foreach ($allData as $index => $team)
                @if($team->status == '1')
                <div class="swiper-slide">
                    <!--Start Team Two Single-->
                    <div class="team-two__single">
                        <div class="team-two__single-bg"
                            style="background-image: url({{ (!empty($team->photo)) ? url('backend/all-images/web/channel/'.$team->photo) : url('assets/img/slider/slider-v2-img'.$index.'.jpg') }}"></div>
                        <div class="team-two__single-img">
                            <div class="inner">
                                <img src="{{ (!empty($team->image)) ? url('backend/all-images/web/channel/'.$team->image) : url('assets/img/slider/slider-v2-img'.$index.'.jpg') }}" alt="">
                                <div class="social-links">
                                    <a href="https://facebook.com/{{ $team->fb }}" class="fb"><span class="icon-facebook"></span></a>
                                    <a href="https://twiteer.com/{{ $team->tw }}" class="tw"><span class="icon-twitter"></span></a>
                                    <a href="https://instagram.com/{{ $team->in }}" class="ins"><span class="icon-instagram"></span></a>
                                    <a href="https://whatsapp.com/{{ $team->wh }}" class="lin"><span class="icon-linkedin"></span></a>
                                </div>
                            </div>
                        </div>
                        <div class="team-two__single-content text-center">
                            <h3><a href="{{ route('team.c', $team->id) }}">{{ $team->name }}</a></h3>
                            <p>{{ $team->position }}</p>
                        </div>
                        <div class="team-two__single-number">
                            <ul class="team-two__single-number-box clearfix">
                                <li class="icon-box"><a href="#"><span class="icon-out-call"></span></a>
                                    <ul class="team-two__single-number-text">
                                        <li>
                                            <p><a href="tel:{{ $team->mobile }}">{{ $team->mobile }}</a></p>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--End Team Two Single-->
                </div>
                @endif
                @endforeach
            </div>
        </div>
        <!-- If we need navigation buttons -->
        <div class="team-two__wrap">
            <div class="swiper-counter">
                <div id="current4">1</div>
                <div id="total4">{{ count($allData) }}</div>
            </div>
        </div>

        <div class="swiper-nav-style1">
            <div class="swiper-button-prev" id="team-two__swiper-button-next">
                <i class="icon-left-arrow-5" aria-hidden="true"></i>
            </div>
            <div class="swiper-button-next" id="team-two__swiper-button-prev">
                <i class="icon-right-arrow-5" aria-hidden="true"></i>
            </div>
        </div>

        <div class="team-two__bottom">
            <div class="text-box">
                <p>We’re Experience. Become a team member!</p>
            </div>

            <div class="btn-box">
                <div class="thm-btn" >
                    <span class="txt">Join Our Team</span> <i class="icon-right-arrow"></i>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Team Two-->

@endsection
