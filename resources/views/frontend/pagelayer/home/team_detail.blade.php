@extends('frontend.home.view')
@section('home')

@php
$setting = DB::table('settings')->first(); 
$index = 1; 
@endphp 

<section class="page-header">
    <div class="page-header__bg" style="background-image: url({{ (!empty($setting->ico)) ? url('backend/all-images/web/all/'.$setting->ico) : url('assets/img/slider/slider-v2-img'.$index.'.jpg') }})">
    </div>
    <div class="container">
        <div class="page-header__inner text-center">
            <h2>Member Detail</h2>
            <ul class="thm-breadcrumb">
                <li><a href="/">Home</a></li>
                <li><span class="icon-right-arrow-5"></span></li>
                <li><a href="/team">Team Member</a></li>
                <li><span class="icon-right-arrow-5"></span></li>
                <li>Member Detail</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Header-->

   <!--Start Team Details-->
   <section class="team-details">
    <div class="container">
        <!--Start Team Details Top-->
        <div class="team-details__top">
            <div class="row">
                <div class="col-xl-6">
                    <div class="team-details__top-img">
                        <img src="{{ (!empty($teamMember->image)) ? url('backend/all-images/web/channel/'.$teamMember->image) : url('assets/img/slider/slider-v2-img'.$index.'.jpg') }}" alt="">
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="team-details__top-content">
                        <div class="team-details__top-content-progress">
                            <div class="team-details__top-content-progress-single">
                                <div class="title">
                                    <h4>Success Rate - {{ $teamMember->rate }}%</h4>
                                </div>
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="{{ $teamMember->rate }}%">
                                        <div class="count-text"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="team-details__top-content-progress-single">
                                <div class="title">
                                    <h4>Complete Work - {{ $teamMember->work }}%</h4>
                                </div>
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="{{ $teamMember->work }}%">
                                        <div class="count-text r123"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="team-details__top-content-progress-single mb0">
                                <div class="title">
                                    <h4>Satisfied Client - {{ $teamMember->satisfied }}%</h4>
                                </div>
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="{{ $teamMember->satisfied }}%">
                                        <div class="count-text r93"></div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="team-details__top-content-bottom">
                            <div class="team-details__top-content-contact-info">
                                <ul>
                                    <li>
                                        <div class="text-box">
                                            <p>Name</p>
                                            <h3>{{ $teamMember->name }}</h3>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="text-box">
                                            <p>Position</p>
                                            <h3>{{ $teamMember->position }}</h3>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="text-box">
                                            <p>Experience</p>
                                            <h3>{{ $teamMember->experience }} Years</h3>
                                        </div>
                                    </li>
                                </ul>

                                <ul>
                                    <li>
                                        <div class="text-box">
                                            <p>Email</p>
                                            <h3><a href="mailto:{{ $teamMember->email }}">{{ $teamMember->email }}</a>
                                            </h3>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="text-box">
                                            <p>Phone</p>
                                            <h3><a href="tel:{{ $teamMember->mobile }}">{{ $teamMember->mobile }}</a></h3>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="text-box">
                                            <p>Department</p>
                                            <h3>{{ $teamMember->address }}</h3>
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="team-details__top-content-social-links">
                                <a href="https://facebook.com/{{ $teamMember->fb }}"><span class="icon-facebook"></span></a>
                                <a href="https://twiteer.com/{{ $teamMember->tw }}"><span class="icon-twitter"></span></a>
                                <a href="https://instagram.com/{{ $teamMember->in }}"><span class="icon-instagram"></span></a>
                                <a href="https://whatsapp.com/{{ $teamMember->wh }}"><span class="icon-linkedin"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Team Details Top-->

        <!--Start Team Details Bottom-->
        <div class="team-details__bottom">
            <div class="row">
                <div class="col-xl-6">
                    <div class="team-details__bottom-content">
                        <h2>Summary</h2>
                        <h4></h4>
                        <div v-pre>
                            {!! $teamMember->summery !!}
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="team-details__bottom-form">
                        <div class="title-box">
                            <h2>Contact Us</h2>
                        </div>

                        <form id="contact-form" action="assets/inc/mail.php" method="POST">
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
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="contact-page__input-box">
                                        <input type="number" placeholder="Mobile" name="number">
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <div class="contact-page__input-box">
                                        <input type="text" placeholder="Company" name="company">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="contact-page__input-box">
                                        <textarea name="message" placeholder="Messege"></textarea>
                                    </div>
                                    <div class="contact-page__btn">
                                        <button type="submit" class="thm-btn"
                                            data-loading-text="Please wait...">
                                            <span class="txt">Sand Massage</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <p class="ajax-response mb-0"></p>

                    </div>
                </div>
            </div>
        </div>
        <!--End Team Details Bottom-->
    </div>
</section>
<!--End Team Details-->


@endsection