@extends('frontend.home.view')
@section('home')

<style>
    .project-two__single-img img {
        width: 90px; /* Set the image width to 90px */
        height: 250px; /* Maintain the aspect ratio */
        max-height: 300px; /* Set a maximum height to prevent very tall images */
    }
</style>

@php
$setting = DB::table('settings')->first();  
$fq = DB::table('f_q_s')->where('status', '1')->get();
$partner = DB::table('patners')->where('status', '1')->get();
$benefit = DB::table('benifits')->where('status', '1')->get();
@endphp

           <!--Start Main Slider Two-->
           <section class="main-slider main-slider-two">
            <div class="swiper-container thm-swiper__slider-two">
                <div class="swiper-wrapper">
        
                    @foreach ($allData as $index => $channel)
                    @if($channel->status == '1')
                        <div class="swiper-slide">
                            <div class="image-layer" style="background-image: url('{{ (!empty($channel->image)) ? url('backend/all-images/web/channel/'.$channel->image) : url('assets/img/slider/slider-v2-img'.$index.'.jpg') }}');">
                            </div>
                            <div class="big-title">
                                <h2>{{ $channel->title }}</h2>
                            </div>
                            <div class="container">
                                <div class="main-slider-two__single">
                                </div>
                            </div>
                        </div>
                    @endif
                    @endforeach
        
                </div>
        
                <!-- If we need navigation buttons -->
                <div class="main-slider-two__wrap">
                    <div class="swiper-counter">
                        <div id="current">1</div>
                        <div id="total">{{ count($allData) }}</div>
                    </div>
                </div>
        
                <div class="swiper-nav-style1">
                    <div class="swiper-button-prev" id="main-slider-two__swiper-button-next">
                        <i class="icon-left-arrow-5" aria-hidden="true"></i>
                    </div>
                    <div class="swiper-button-next" id="main-slider-two__swiper-button-prev">
                        <i class="icon-right-arrow-5" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </section>


         <!--Start Fact Counter Two-->
         <section class="fact-counter-two">
            <div class="shape1 float-bob-y"><img src="assets/img/shape/counter-v2-shape1.png" alt=""></div>
            <div class="container">
                <div class="row">
                    @foreach ($kar as $index => $ef)
                    @if($ef->status == '1')
                    <!--Start Fact Counter Two Single-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="fact-counter-two__single">
                            <div class="icon-box">
                                <span class=""><img src="{{ (!empty($ef->image)) ? url('backend/all-images/web/channel/'.$ef->image) : url('assets/img/slider/slider-v2-img'.$index.'.jpg') }}"/></span>
                            </div>
                            <div class="fact-counter-two__single-inner">
                                <h2 class="count"><span class="plus"></span><span class="odometer"
                                        data-count="{{$ef->count}}"></span>
                                </h2>
                                <div class="text">
                                    <p>{{$ef->name}}</p>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                    @endif
                    @endforeach
                    <!--End Fact Counter Two Single-->
                </div>
            </div>
        </section>
        <!--End Fact Counter Two-->


        

        <!--Start Services Two-->
        <section class="project-two project-two--project">
            <div class="services-two__bg" style="background-image: url({{asset('frontend/assets//img/background/bg.png')}});">
            </div>
            <div class="container">
                <div class="sec-title-two">
                    <h2><font color="white">Our Products</font></h2>
                </div>
                <div class="row">
                    @foreach ($data as $index => $team)
                    <!--Start Services Three Single-->
                    <div class="col-lg-3 col-lg-3 col-md-3">
                        <div class="services-three__single">
                            <div class="project-two__single-img img">
                                <div class="inner">
                                    <img src="{{ (!empty($team->image)) ? url('backend/all-images/web/channel/'.$team->image) : url('assets/img/slider/slider-v2-img'.$index.'.jpg') }}" alt="">
                                </div>
                            </div>
        
                            <div class="services-three__single-content">
                                <div class="services-three__single-content-inner">
                                    <h5>{{ $team->title }}</h5>
                                    @if ($team->subcategory)
                                    <p><div></div></p>
                                    @endif
                                    <div class="count-box">
                                        {{$index + 1}}
                                    </div>
                                    <div class="btn-box">
                                        <a href="{{ route('pd', $team->id) }}">Read More <i class="icon-right-arrow-5"></i></a>
        
                                        <div class="number-box">
                                            {{$index + 1}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Services Three Single-->
                    @endforeach
                </div>
                    <ul class="styled-pagination clearfix">
                        {{ $data->links('vendor.pagination.default') }}
                    </ul>

            </div>
        </section>
        <!--End Services Two-->



        <!--Start Company Benefit One-->
        <section class="company-benefit-one">
            <div class="company-benefit-one__img wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms"
                style="background-image: url(assets/img/resource/company-benefit-v1-img1.jpg);"></div>
            <div class="container">
                <div class="row">
                    <!--Start Company Benefit One Content-->
                    <div class="col-xl-7">
                        <div class="company-benefit-one__content">
                            <div class="sec-title-two">
                                <div class="sub-title">
                                    <h5>Company Benefit</h5>
                                </div>
                                <h4>Why do You Like {{$setting->title}}?</h4>
                            </div>

                            <div class="company-benefit-one__content-text">
                            </div>

                            <ul class="company-benefit-one__content-list">
                                @foreach ($benefit as $index => $bn)
                                @if($bn->status == '1')
                                <li class="wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="shape1"><img src="{{asset('frontend/assets/img/shape/company-benefit-v1-shape1.png')}}"
                                            alt=""></div>
                                    <div class="icon-box">
                                        <span class="icon-right"><img src="{{ (!empty($bn->image)) ? url('backend/all-images/web/channel/'.$bn->image) : url('assets/img/slider/slider-v2-img'.$index.'.jpg') }}"></span>
                                    </div>

                                    <div class="content-box">
                                        <h3>{{$bn->title}}</h3>
                                        <p>{{$bn->description}}</p>
                                    </div>
                                </li>
                                @endif
                                @endforeach

                            </ul>

                        </div>
                    </div>
                    <!--End Company Benefit One Content-->

                    <!--Start Company Benefit One Form-->
                    <div class="col-xl-5">
                        <div class="company-benefit-one__form">
                            <div class="title-box">
                                <h2>Request Quick Quote</h2>
                            </div>

                            <form method="post" action="{{ route('info_c') }}" method="POST">
                                @csrf
                                <div class="company-benefit-one__distance-box">

                                </div>

                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <input type="text" name="name" placeholder="Full Name" required="">
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Email" required="">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <input type="text" name="mobile" placeholder="Phone" required="">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <textarea name="message" placeholder="Wright your massage"></textarea>
                                        </div>

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="button-box">
                                            <button class="thm-btn" type="submit" data-loading-text="Please wait...">
                                                <span class="txt">
                                                    Sand Request
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--End Company Benefit One Form-->
                </div>
            </div>
        </section>
        <!--End Company Benefit One-->



            <!-- Start Faq One-->
            <section class="faq-one faq-one--two">
                <div class="big-title">
                    <h2>faq</h2>
                </div>
                <div class="faq-one__bg" style="background-image: url({{asset('frontend/assets/img/resource/bg.jpg')}});"></div>
                <div class="container">
                    <div class="row">
                        <!-- Start Faq One Faq-->
                        <div class="col-xl-6">
                            <div class="faq-one__faq">
    
                                <div class="sec-title-two">
                                    <div class="sub-title">
                                        <h5>FAQ?</h5>
                                    </div>
                                    <h2>Frequently Asked Questions</h2>
                                </div>

                                @foreach ($fq as $index => $team)
                                @if($team->status == '1')
                                
                                    <ul class="accrodion-grp faq-one__accrodion" data-grp-name="faq-one-accrodion">
                                        <!-- Start Faq One Single-->
                                        <li class="accrodion {{ $index === 0 ? 'active' : '' }}">
                                            <div class="accrodion-title">
                                                <h2><span>{{ $index + 1 }}.</span> {{ $team->question }}</h2>
                                            </div>
                                            <div class="accrodion-content">
                                                <div class="inner">
                                                    <span>Answere:</span>
                                                    <p>{{ $team->ans }}</p>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- End Faq One Single-->
                                    </ul>
                                
                                @endif
                                @endforeach
                            </div>
                        </div>
                        <!-- End Faq One Faq-->
    
                        <!-- Start Faq One Contact Info-->
                        <div class="col-xl-6">
                            <div class="faq-one__contact-info wow fadeInRight" data-wow-delay=".3s">
                                <div class="title-box">
                                    <p>Let’s Talk</p>
                                    <h3>You need any help? get free consultation</h3>
                                </div>
    
                                <div class="faq-one__contact-info-number">
                                    <div class="icon">
                                        <span class="icon-call"></span>
                                    </div>
    
                                    <div class="text">
                                        <p>Have Any Questions</p>
                                        <h3><a href="tel:{{$setting->contract}}">{{$setting->contract}}</a></h3>
                                    </div>
                                </div>
    
                                <div class="btn-box">
                                    <a class="thm-btn" href="/contact">
                                        <span class="txt">Contact Us</span> <i class="icon-right-arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- End Faq One Contact Info-->
                    </div>
                </div>
            </section>
            <!-- End Faq One-->


<!-- Start Partner Section -->
<div class="brand-one">
    <div class="shape1 float-bob-x"><img src="{{ asset('frontend/assets/img/shape/brand-v1-shape1.png') }}" alt=""></div>
    <div class="big-title">Partner</div>
    <div class="container">
        <div class="bandslider">
            <div class="swiper-wrapper">
                @foreach ($partner as $index => $teams)
                    @if($teams->status == '1')
                        <div class="swiper-slide">
                            <div class="img-box">
                                <img src="{{ (!empty($teams->image)) ? url('backend/all-images/web/channel/'.$teams->image) : url('assets/img/slider/slider-v2-img'.$index.'.jpg') }}" alt="#">
                            </div>
                            <div class="img-box2">
                                <img src="{{ (!empty($teams->image)) ? url('backend/all-images/web/channel/'.$teams->image) : url('assets/img/slider/slider-v2-img'.$index.'.jpg') }}" alt="#">
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- End Partner Section -->



<script src="{{ asset('js/load-more.js') }}"></script>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var mySwiper = new Swiper('.bandslider', {
            loop: true,
            autoplay: {
                delay: 3000, // Set the delay in milliseconds
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            slidesPerView: 6,
            spaceBetween: 10, // Adjust the space between items as needed
            breakpoints: {
                0: {
                    slidesPerView: 1,
                    spaceBetween: 0,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 10,
                },
                992: {
                    slidesPerView: 5,
                    spaceBetween: 10,
                },
                1200: {
                    slidesPerView: 5,
                    spaceBetween: 10,
                },
            },
        });
    });

</script>

@endsection