@extends('frontend.home.view')
@section('home')

@php
$setting = DB::table('settings')->first();
$index = 1;  
@endphp

<style>
.services-details-page__content {
    display: flex;
    align-items: center;
}

.services-details-page__content-img1 {
    flex: 1;
    margin-right: 20px; /* Adjust as needed */
}

.services-details-page__content-img1 img {
    width: 100%; /* Ensure the image takes the full width of its container */
}

.services-details-page__content-text1 {
    flex: 2;
}

.details-info {
    display: flex;
}

.left-info {
    flex: 1;
}

.right-info {
    flex: 1;
}



</style>

<section class="page-header">
    <div class="page-header__bg" style="background-image: url({{ (!empty($setting->ico)) ? url('backend/all-images/web/all/'.$setting->ico) : url('assets/img/slider/slider-v2-img'.$index.'.jpg') }})">
    </div>
    <div class="container">
        <div class="page-header__inner text-center">
            <h2>Product Detail</h2>
            <ul class="thm-breadcrumb">
                <li><a href="/">Home</a></li>
                <li><span class="icon-right-arrow-5"></span></li>
                <li><a href="#">{{ optional($allData->category)->name }}</a></li>
                <li><span class="icon-right-arrow-5"></span></li>
                <li>Product Detail</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Header-->


        <!--Start Services Details Page-->
        <section class="services-details-page">
            <div class="container">
                <div class="row">
                    <!--Start Services Details Page Content-->
                    <div class="col-xl-8">
                        <div class="page-content">
                            <div class="container">
                                <div class="row gutter-lg">
                                    <div class="main-content">
                                        <div class="product product-single row">
                                            <div class="col-md-6 mb-6">
                                                <div class="product-gallery product-gallery-sticky">
                                                        <div class="swiper-wrapper row cols-1 gutter-no">
                                                            <div class="swiper-slide">
                                                                <figure class="product-image">
                                                                    <img src="{{ (!empty($allData->image)) ? url('backend/all-images/web/channel/'.$allData->image) : url('assets/img/slider/slider-v2-img'.$index.'.jpg') }}" width="800" height="400" alt="">
                                                                </figure>
                                                            </div>
                                                          
                                                        </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4 mb-md-6">
                                                <div class="product-details" data-sticky-options="{'minWidth': 767}">
                                                    <h3 class="product-title">{{$allData->title}}</h3>
                                                    <div class="product-bm-wrapper"><br/>
                                                        <div class="product-meta">
                                                            <div class="product-categories">
                                                               <b>Made In :</b>
                                                                <span class="product-category"><a><font color="red">{{$allData->made}}</font></a></span>
                                                            </div>
                                                            <div class="product-sku">
                                                                <b>Guaranty</b> : <span>{{$allData->gar}} Years</span> & <b>Warranty</b> : <span>{{$allData->war}} Years</span>
                                                            </div>
                                                        </div>
                                                    </div>
            
                                                    <hr class="product-divider">
            
                                                    <div class="product-price"><div class="new-price"><b>BDT. {{$allData->price}}</b></div></div>
            
                                                    <hr class="product-divider"><br/><br/><br/>
            
                                                    <div class="fix-bottom product-sticky-content sticky-content">
                                                        <div class="product-form container"align="right">
                                                            <a href="/info/view" class="btn btn-primary btn-cart">
                                                                <i class="w-icon-cart"></i>
                                                                <span>Buy Now</span>
                                                            </a>
                                                        </div>
                                                    </div>
            
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab tab-nav-boxed tab-nav-underline product-tabs">
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li class="nav-item">
                                                    <a href="#product-tab-description" class="nav-link active">Description</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="product-tab-description">
                                                    <div class="row mb-4">
                                                        <div class="col-md-12 mb-12">
                                                            <p class="mb-4">{!! $allData->summery !!}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Sidebar -->
                                </div>
                            </div>
                        </div>
                        <!-- End of Page Content -->
                        
                    </div>
                    <!--End Services Details Page Content-->

                    <!--Start Sidebar-->
                    <div class="col-xl-4">
                        <div class="sidebar">
                            <!--Start Sidebar Single-->
                            <div class="sidebar__single sidebar__contact wow fadeInUp" data-wow-delay=".4s">
                                <div class="sidebar__contact-bg"
                                    style="background-image: url({{asset('frontend/assets/img/service/bd.png')}});"></div>
                                <div class="sidebar__contact-box">
                                    <div class="title">
                                        <h2>Any Question?</h2>
                                    </div>

                                    <div class="sidebar__contact-box-bottom">
                                        <div class="icon-box">
                                            <span class="icon-out-call"></span>
                                        </div>

                                        <div class="text-box">
                                            <p>Call Us Now</p>
                                            <h4><a href="tel:{{$setting->contract}}">{{$setting->contract}}</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <!--End Sidebar Single-->
                            </div>
                            
                            <!--Start Sidebar Single-->
                            <div class="sidebar__single sidebar__services wow fadeInUp" data-wow-delay=".2s">
                                <div class="title-box">
                                    <h2>Product List</h2>
                                </div>
                                <ul class="sidebar__services-list">
                                    @foreach($sub as $index => $has)
                                    <li><a class="active" href="{{route('ps',$has->id)}}">{{$has->name}} <span
                                                class="icon-right-arrow-5"></span></a></li>
                                    @endforeach
                                </ul>
                            </div>
                            <!--End Sidebar Single-->
                        </div>
                    </div>
                    <!--End Sidebar-->
                </div>
            </div>
        </section>
        <!--End Services Details Page-->


@endsection