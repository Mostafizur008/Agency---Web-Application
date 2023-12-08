@extends('frontend.home.view')
@section('home')


@php
$setting = DB::table('settings')->first(); 
$about = DB::table('abouts')->first(); 
@endphp 


<section class="page-header">
  @php
    $index = 1; // You can set it to the desired value
  @endphp
    <div class="page-header__bg" style="background-image: url({{ (!empty($setting->ico)) ? url('backend/all-images/web/all/'.$setting->ico) : url('assets/img/slider/slider-v2-img'.$index.'.jpg') }})">
    </div>
    <div class="container">
        <div class="page-header__inner text-center">
            <h2>About us</h2>
            <ul class="thm-breadcrumb">
                <li><a href="/">Home</a></li>
                <li><span class="icon-right-arrow-5"></span></li>
                <li>About us</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Header-->

<!--Start About Three-->
<section class="about-three">
    <div class="container">
        <div class="row">
            <!--Start About Three Img-->
            <div class="col-xl-6">
                <div class="about-three__img">
                    <div class="shape1"><img src="{{asset('frontend/assets/img/shape/about-v3-shape1.png')}}" alt=""></div>
                    <div class="about-three__img1 wow fadeInLeft" data-wow-delay=".1s">
                        <img src="{{ (!empty($about->photo)) ? url('backend/all-images/web/all/'.$about->photo) : url('assets/img/slider/slider-v2-img'.$index.'.jpg') }}" alt="">
                    </div>
                    <div class="about-three__img2 wow fadeInRight" data-wow-delay=".1s">
                        <img src="{{ (!empty($about->image)) ? url('backend/all-images/web/all/'.$about->image) : url('assets/img/slider/slider-v2-img'.$index.'.jpg') }}" alt="">
                    </div>
                    <div class="about-three__img-icon-box">
                        <div class="round-text">
                            <div class="curved-circle-3 rotate-me">
                                {{ $about->since }}
                            </div>
                        </div>
                        <div class="icon">
                            <img src="{{ (!empty($about->ico)) ? url('backend/all-images/web/all/'.$about->ico) : url('assets/img/slider/slider-v2-img'.$index.'.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <!--End About Three Img-->

            <!--Start About Three Content-->
            <div class="col-xl-6">
                <div class="about-three__content">
                    <div class="sec-title-style3">
                        <div class="sub-title">
                            <div class="icon">
                                <img src="assets/img/icon/title-marker-4.png" alt="">
                            </div>
                            <h5>About Company</h5>
                        </div>
                        <h4>Some statements from the owner of the company</h4>
                    </div>
                    <div class="about-three__content-text">
                        <p>{{ $about->owner }}</p>
                    </div>

                    <ul class="about-three__content-list">
                        <li>
                            <div class="icon-box">
                                <span class="icon-global-network"></span>
                            </div>

                            <div class="text-box">
                                <h3>Mission</h3>
                                <p>{{ $about->mission }}</p>
                            </div>
                        </li>

                        <li>
                            <div class="icon-box">
                                <span class="icon-enter-product-details"></span>
                            </div>

                            <div class="text-box">
                                <h3>Vission</h3>
                                <p>{{ $about->vission }}</p>
                            </div>
                        </li>
                    </ul>

                    <div class="about-three__content-bottom">
                        <div class="btn-box">
                            <a class="thm-btn" href="/contact">
                                <span class="txt">Contact Us</span>
                            </a>
                        </div>

                        <div class="author-box">
                            <div class="img-box">
                                <img src="{{asset('frontend/assets/img/about/bf.png')}}" alt="">
                            </div>

                            <div class="text-box">
                                <p>Need Help?</p>
                                <h3><a href="tel:{{ $setting->contract }} ">{{ $setting->contract }} </a></h3>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--End About Three Content-->
        </div>
    </div>
</section>
<!--End About Three-->


@endsection