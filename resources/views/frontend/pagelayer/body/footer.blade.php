<footer class="footer-one footer-one--two">
    <div class="footer-one__bg" style="background-image: url({{asset('frontend/assets//img/background/bg.jpg')}});"></div>
    <!-- Start Footer Main -->
    <div class="footer-main">
        <div class="container">
            <div class="footer-main__bottom">
                <div class="row">
                    <!--Start Single Footer Widget-->
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".1s">
                        <div class="single-footer-widget footer-widget__about">
                            <div class="logo-box">
                                <a href="/"><img src={{ (!empty($setting->image)) ? url('backend/all-images/web/logo/'.$setting->image): url('backend/all-images/web/default/logo.png') }} alt="Logo"></a>
                            </div>
                            <div class="footer-widget__about-inner">
                                <p class="text1">{{ $setting->address }}</p>
                                <p class="text3">Sat-Thu: 10:00am to 07:00pm</p>

                            </div>
                        </div>
                    </div>
                    <!--End Single Footer Widget-->

                    <!--Start Single Footer Widget-->
                    <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                        <div class="single-footer-widget footer-widget__links">
                            <div class="title">
                                <h2>Quick Links</h2>
                            </div>

                            <div class="footer-widget__links-box">
                                <ul>
                                    <li><a href="/about">Mission & Vision</a></li>
                                    <li><a href="/suppliers">Authorized Supplier</a></li>
                                    <li><a href="/team">Meet The Team</a></li>
                                    <li><a href="/clients">Our Clients</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End Single Footer Widget-->

                    <!--Start Single Footer Widget-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="single-footer-widget footer-widget__links services">
                            <div class="title">
                                <h2>Information</h2>
                            </div>

                            <div class="footer-widget__links-box">
                                <ul>
                                    <li><a href="/office-location">Office Location</a></li>
                                    <li><a href="/contact">Contact us</a></li>
                                    <li><a href="/info/view">Buy Message</a></li>
                                    <li><a href="/service">Service</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--End Single Footer Widget-->

                    <!--Start Single Footer Widget-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                        <div class="single-footer-widget single-footer__newsletter">
                            <div class="title">
                                <h2>Newsletter</h2>
                            </div>
                            <div class="single-footer__newsletter-box">
                                <form class="single-footer__newsletter-form">
                                    <div class="single-footer__newsletter-form-input">
                                        <input type="email" placeholder="Enter Your Email" name="email">
                                    </div>

                                    <div class="single-footer__newsletter-btn">
                                        <button class="thm-btn" type="submit">
                                            <span class="txt">Subscribe New</span>
                                            <i class="icon-right-arrow"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--End Single Footer Widget-->
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Main -->

    <!--Start Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom__inner">
                <div class="copyright-text">
                    <p>2023 - <script>document.write(new Date().getFullYear())</script> &copy; FUJIELEVATORBD | Developed By <a href="https://mrsbd.xyz/">Mrsbd</a> </p>
                </div>
                <div class="copyright-menu">
                    <ul>
                        <li><a>Trams &amp; Condition</a></li>
                        <li><a>Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--End Footer Bottom -->
</footer>