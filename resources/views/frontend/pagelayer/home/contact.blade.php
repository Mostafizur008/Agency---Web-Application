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
            <h2>Contact</h2>
            <ul class="thm-breadcrumb">
                <li><a href="/">Home</a></li>
                <li><span class="icon-right-arrow-5"></span></li>
                <li>Contact</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Header-->

   <!--Start Contact Page-->
   <section class="contact-page">
    <div class="shape1 float-bob-y"><img src="assets/img/shape/contact-page-shape1.png" alt=""></div>
    <div class="shape2 float-bob-y"><img src="assets/img/shape/contact-page-shape2.png" alt=""></div>
    <div class="container">
        <div class="row">
            <!--Start Contact Page Contact Info-->
            <div class="col-xl-5">
                <div class="contact-page__contact-info">
                    <div class="sec-title-style3">
                        <div class="sub-title">
                            <div class="icon">
                                <img src="assets/img/icon/title-marker-4.png" alt="">
                            </div>
                            <h5>Get In Touch</h5>
                        </div>
                        <h2>Contact Us Today</h2>
                    </div>

                    <ul>
                        <li>
                            <div class="icon-box">
                                <span class="icon-telephone-call"></span>
                            </div>

                            <div class="text-box">
                                <p>Call Us</p>
                                <h2><a href="tel:123456789">{{ $setting->contract }}</a></h2>
                            </div>
                        </li>

                        <li>
                            <div class="icon-box">
                                <span class="icon-location"></span>
                            </div>

                            <div class="text-box">
                                <p>Bangladesh Office</p>
                                <h5>{{ $setting->address }}</h5>
                            </div>
                        </li>

                        <li>
                            <div class="icon-box">
                                <span class="icon-email"></span>
                            </div>

                            <div class="text-box">
                                <p>Email Us</p>
                                <h2><a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a></h2>
                            </div>
                        </li>

                        <li>
                            <div class="icon-box">
                                <span class="icon-time"></span>
                            </div>

                            <div class="text-box">
                                <p>Opening Time</p>
                                <h2>Saturday - Thusday <br>
                                    10am : 07pm</h2>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!--End Contact Page Contact Info-->

            <!--Start Contact Page Form-->
            <div class="col-xl-7">
                <div class="contact-page__form-box">
                    <div class="title">
                        <h2>Feel free to write Us</h2>
                    </div>
                    @if(session('notification'))
                    <div class="alert alert-{{ session('notification.alert-type') }}">
                        {{ session('notification.message') }}
                    </div>
                    @endif
                    <form id="contact-form" action="{{ route('info_c') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="contact-page__input-box">
                                    <input type="text" placeholder="Full Name" name="name" required>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="contact-page__input-box">
                                    <input type="email" placeholder="Email" name="email" required>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <div class="contact-page__input-box">
                                    <input type="number" placeholder="Mobile" name="mobile">
                                </div>
                            </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="contact-page__input-box">
                                <textarea name="message" placeholder="Messege"></textarea>
                            </div>
                            <div class="contact-page__btn">
                                <button type="submit"  class="thm-btn">
                                    <span class="txt">Sand Massage</span>
                                </button>
                            </div>
                        </div>
                        </div>
                    </form>
                    <div class="contact-page__form-box-text">
                        <p><span>Nots:</span> Packages and web page editors now use Lorem Ipsum as their default
                            model textlayout.</p>
                    </div>
                </div>
            </div>
            <!--End Contact Page Form-->
        </div>
    </div>
</section>
<!--End Contact Page-->





@endsection