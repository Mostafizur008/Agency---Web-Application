<!--Start Main Header Two -->
      <header class="main-header main-header-two">
        <div id="sticky-header" class="menu-area">
            <div class="main-header-two__outer" >
                <div class="logo-box-two">
                    <a href="/"> <img id="logo" alt="Logo"></a>
                </div>
                <div class="menu-area__inner">
                    <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                    <div class="menu-wrap">
                        <nav class="menu-nav">
                            <div class="main-header-two__inner">
                                <div class="main-header-two__top">
                                    <div class="main-header-two__top-pattern" style="background-image: url('{{ (!empty($setting->image)) ? url('backend/all-images/web/logo/'.$setting->image) : url('backend/all-images/web/default/logo.png') }}');">
                                     </div>

                                    <div class="main-header-two__top-inner">
                                        <div class="main-header-two__top-left">
                                            <div class="header-contact-info">
                                                <ul>
                                                    <li>
                                                        <div class="icon-box"><span class="icon-pin"></span>
                                                        </div>
                                                        <p id="address">{{ $setting->address }}</p>
                                                    </li>
                                                    <li>
                                                        <div class="icon-box"><span class="icon-paper-plane"></span>
                                                        </div>
                                                        <p><a href="mailto:{{$setting->email}}">{{$setting->email}}</a>
                                                        </p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="main-header-two__top-right">
                                            <div class="inner">

                                                <div class="btn-box">
                                                    <a href="/office-location">OFFICE LOCATION<span
                                                            class="icon-right-arrow"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="main-header-two__bottom">
                                    <div class="main-header-two__bottom-left">
                                        <div class="navbar-wrap main-menu">
                                            <ul class="navigation">
                                                <li class="{{ Request::is('about') ? 'active' : '' }}">
                                                    <a href="{{ url('/about') }}">About</a>
                                                </li>

                                                <li class="{{ Request::is('service') ? 'active' : '' }}">
                                                    <a href="{{ url('/service') }}">Service</a>
                                                </li>

                                            <!--@foreach ( $categories as $category)
                                                <li class="menu-item-has-children">
                                                    <a href="#">{{ $category->name }}</a>
                                                    @if(count($category->subcategories) > 0)
                                                        <ul class="sub-menu">
                                                            @foreach ($category->subcategories as $subcategory)
                                                                <li class="{{ Request::is('#') ? 'active' : '' }}">
                                                                    <a href="{{ route('ps', $subcategory->id) }}">{{ $subcategory->name }}</a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                </li>
                                            @endforeach -->


                                            <li class="menu-item-has-children">
                                                <a href="#">Products</a>
                                                <ul class="sub-menu">
                                                    @foreach($categories as $category)
                                                        <li class="{{ Request::is('#') ? 'active' : '' }}">
                                                            <a href="{{ url('#') }}">{{ $category->name }}</a>
                                                            @if($category->subcategories->count() > 0)
                                                                <ul class="sub-menu">
                                                                    @foreach($category->subcategories as $subcategory)
                                                                        <li class="{{ Request::is('#') ? 'active' : '' }}">
                                                                            <a href="{{ route('ps', $subcategory->id) }}">{{ $subcategory->name }}</a>
                                                                        </li>
                                                                    @endforeach
                                                                </ul>
                                                            @endif
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                            


                                                <li class="menu-item-has-children"><a href="#">Information</a>
                                                    <ul class="sub-menu">
                                                        <li class="{{ Request::is('team') ? 'active' : '' }}">
                                                            <a href="{{ url('/team') }}">Team Member</a>
                                                        </li>
                                                        <li class="{{ Request::is('suppliers') ? 'active' : '' }}">
                                                            <a href="{{ url('/suppliers') }}">Authorized Supplier</a>
                                                        </li>
                                                        <li class="{{ Request::is('clients') ? 'active' : '' }}">
                                                            <a href="{{ url('/clients') }}">Our Client</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="{{ Request::is('contact') ? 'active' : '' }}">
                                                    <a href="{{ url('/contact') }}">Contact</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>


                                    <div class="main-header-two__bottom-right">
                                      <div class="icon-box" style="margin-right: 10px;"><span class="icon-out-call"></span></div>
                                      <h6><a href="tel:{{ $setting->contract }}"> {{ $setting->contract }} </a></h6>
                                  </div>
                                  
                                  
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>

                <!-- Mobile Menu  -->
                <div class="mobile-menu">
                    <nav class="menu-box">
                        <div class="close-btn"><i class="fas fa-times"></i></div>
                        <div class="nav-logo">
                            <a href="index.html"><img src={{ (!empty($setting->image)) ? url('backend/all-images/web/logo/'.$setting->image): url('backend/all-images/web/default/logo.png') }} alt="Logo"></a>
                        </div>
                        <div class="menu-outer">
                            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                        </div>
                        <div class="contact-info">
                            <div class="icon-box"><span class="icon-telephone-handle-silhouette"></span></div>
                            <p><a href="tel:{{$setting->contract}}">{{$setting->contract}}</a></p>
                        </div>
                        <div class="social-links">
                            <ul class="clearfix list-wrap">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="menu-backdrop"></div>
                <!-- End Mobile Menu -->
            </div>
        </div>
    </header>
    <!--End Main Header Two -->

   

<script>
  document.addEventListener("DOMContentLoaded", function() {
    var logoElement = document.getElementById("logo");

    // Check for WebP support
    var webpImage = new Image();
    webpImage.onload = function() {
      logoElement.src = "{{ (!empty($setting->image)) ? url('backend/all-images/web/logo/'.$setting->image) : url('backend/all-images/web/default/logo.png') }}";
    };
    webpImage.onerror = function() {
      // Fallback to JPEG or PNG if WebP is not supported
      logoElement.src = "{{ (!empty($setting->image)) ? url('backend/all-images/web/logo/'.$setting->image) : url('backend/all-images/web/default/logo.png') }}";
    };
    webpImage.src = "{{ (!empty($setting->image)) ? url('backend/all-images/web/logo/'.$setting->image) : url('backend/all-images/web/default/logo.png') }}";
  });
</script>