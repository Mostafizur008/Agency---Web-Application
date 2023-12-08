@extends('frontend.home.view')
@section('home')
        <!--Start Error Page-->
        <section class="error-page">
            <div class="error-page__bg" style="background-image: url({{asset('frontend/assets/img/background/error-page-bg.jpg')}});"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="error-page__wrapper text-center">
                            <div class="error-page__content">
                                <div class="shape1"><img src="{{asset('frontend/assets/img/shape/error-page-shape1.png')}}" alt=""></div>
                                <h2>4<span><img src="{{asset('frontend/assets/img/shape/error-page-shape2.png')}}" alt=""></span>4</h2>
                                <h3>Opps! Page Not Found</h3>
                                <p>The point of using are Ipsum is that it has a more-or-less normal distribution of
                                    <br> letterng It is a long established fact.</p>
                                <div class="btn-box">
                                    <a class="thm-btn" href="/">
                                        <span class="txt">Back to Homepage</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Error Page-->

        @endsection