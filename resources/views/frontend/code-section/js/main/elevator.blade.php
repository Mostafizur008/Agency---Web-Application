<!-- JS here -->
    <script src="{{asset('frontend/assets/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/ajax-form.js')}}"></script>
    <script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.appear.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.circleType.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.lettering.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.odometer.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery-sidebar-content.js')}}"></script>
    <script src="{{asset('frontend/assets/js/nouislider.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/slick.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/swiper.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/wow.min.js')}}"></script>
    <script src="{{asset('frontend/assets/vendor/TweenMax.min.js')}}"></script>

    <script src="{{asset('frontend/assets/js/main.js')}}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var addressElement = document.getElementById('address');
            if (addressElement) {
                var addressText = addressElement.innerText;
                if (addressText.length > 10) {
                    addressElement.innerText = addressText.substr(0, 48) + '...';
                }
            }
        });
    </script>

<script>
    var swiper = new Swiper('.thm-swiper__slider', {
        slidesPerView: 1,
        loop: true,
        effect: 'fade',
        pagination: {
            el: '#main-slider-pagination',
            type: 'bullets',
            clickable: true,
        },
        navigation: {
            nextEl: '#main-slider__swiper-button-next',
            prevEl: '#main-slider__swiper-button-prev',
        },
        autoplay: {
            delay: 7000,
        },
    });
</script>
