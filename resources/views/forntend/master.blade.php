<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link rel="icon" href="{{ url('frontend/images/fav.png') }}">
<title>@if(!empty($title)) Interior Bangladesh | {{ $title }} @else Interior Bangladesh @endif</title>

<!-- bootstrap -->
<link rel="stylesheet" type="text/css" href="{{ url('frontend/css/bootstrap.min.css') }}"/>

<!-- magnific-popup -->
<link rel="stylesheet" type="text/css" href="{{ url('frontend/css/lightgallery-bundle.min.css') }}"/>

<!-- animate -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

<!-- owl-carousel -->
<link rel="stylesheet" type="text/css" href="{{ url('frontend/css/owl.carousel.css') }}">

<!-- fontawesome -->
<link rel="stylesheet" type="text/css" href="{{ url('frontend/css/font-awesome.css') }}"/>

<!-- themify -->
<link rel="stylesheet" type="text/css" href="{{ url('frontend/css/themify-icons.css') }}"/>

<!-- flaticon -->
<link rel="stylesheet" type="text/css" href="{{ url('frontend/css/flaticon.css') }}"/>

<!-- shortcodes -->
<link rel="stylesheet" type="text/css" href="{{ url('frontend/css/shortcodes.css') }}"/>

<!-- main -->
<link rel="stylesheet" type="text/css" href="{{ url('frontend/css/main.css') }}"/>


<!--Color Themes-->
<link id="switcher-color" href="{{ url('frontend/css/colors/default-color.css') }}"/>

<!-- responsive -->
<link rel="stylesheet" type="text/css" href="{{ url('frontend/css/responsive.css') }}"/>
</head>

<body>

    <!--page start-->
    <div class="page">

        <!-- preloader start -->
        <section class="loader">
            <div id="preloader">
                <div id="ctn-preloader" class="ctn-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="I" class="letters-loading">
                                I
                            </span>

                            <span data-text-preloader="N" class="letters-loading">
                                N
                            </span>

                            <span data-text-preloader="T" class="letters-loading">
                                T
                            </span>

                            <span data-text-preloader="E" class="letters-loading">
                                E
                            </span>

                            <span data-text-preloader="R" class="letters-loading">
                                R
                            </span>

                            <span data-text-preloader="I" class="letters-loading">
                                I
                            </span>

                            <span data-text-preloader="O" class="letters-loading">
                                O
                            </span>

                            <span data-text-preloader="R" class="letters-loading">
                                R
                            </span>

                            <span data-text-preloader="&nbsp;" class="letters-loading">
                                &nbsp;
                            </span>

                            <span data-text-preloader="B" class="letters-loading">
                                B
                            </span>

                            <span data-text-preloader="A" class="letters-loading">
                                A
                            </span>

                            <span data-text-preloader="N" class="letters-loading">
                                N
                            </span>

                            <span data-text-preloader="G" class="letters-loading">
                                G
                            </span>

                            <span data-text-preloader="L" class="letters-loading">
                                L
                            </span>

                            <span data-text-preloader="A" class="letters-loading">
                                A
                            </span>

                            <span data-text-preloader="D" class="letters-loading">
                                D
                            </span>

                            <span data-text-preloader="E" class="letters-loading">
                                E
                            </span>

                            <span data-text-preloader="S" class="letters-loading">
                                S
                            </span>

                            <span data-text-preloader="H" class="letters-loading">
                                H
                            </span>
                        </div>
                    </div>
                    <div class="loader-section section-left"></div>
                    <div class="loader-section section-right"></div>
                </div>
            </div>
        </section>
        <!-- preloader end -->

        <!--header start-->
        <header id="masthead" class="header ttm-header-style-classic">

            <!-- ttm-topbar-wrapper -->
            <div class="ttm-topbar-wrapper ttm-bgcolor-darkgrey ttm-textcolor-white clearfix">
                <div class="container">
                    <div class="ttm-topbar-content">
                        <ul class="top-contact ttm-highlight-left text-left">
                            <li class="text-white">
                                <i class="fa fa-phone"></i>
                                <a class="tel-no" href="tel:01534-545945"> 01534-545945</a>
                            </li>
                        </ul>
                        <div class="topbar-right d-flex justify-content-between">
                            <ul class="top-contact">
                                <li class="text-white">
                                    <i class="fa fa-envelope-o"></i>
                                    <a href="mailto:Interiorbangladesh@gmail.com">Interiorbangladesh@gmail.com</a>
                                </li>
                            </ul>
                            <div class="ttm-social-links-wrapper list-inline d-flex justify-content-between">
                                <ul class="social-icons">
                                    <li><a href="https://www.facebook.com/bangladeshinterior"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-youtube-play"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ttm-topbar-wrapper end -->
            @if(Session::has('success'))
                <div class="alert alert-newsletter alert-success border-0 fade show" role="alert" style="position: absolute; right: 40px; top: 160px; width: 400px; z-index: 111;">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>{{ Session::get('success') }}</strong>
                </div>
            @endif
            <!-- ttm-header-wrap -->
            <div class="ttm-header-wrap">
                <!-- ttm-stickable-header-w -->
                <div id="ttm-stickable-header-w" class="ttm-stickable-header-w clearfix">
                    <div id="site-header-menu" class="site-header-menu">
                        <div class="site-header-menu-inner ttm-stickable-header">
                            <div class="container">
                                <!-- site-branding -->
                                <div class="site-branding">
                                    <a class="home-link" href="{{ route('main') }}" title="Boldman" rel="home">
                                        <img src="{{ url('frontend/images/logo.png') }}" alt="logo" class="img-center img-fluid">
                                    </a>
                                </div>
                                <!-- site-branding end -->
                                <!--site-navigation -->
                                <div id="site-navigation" class="site-navigation">
                                    <!-- header-icins -->
                                    <div class="ttm-menu-toggle">
                                        <input type="checkbox" id="menu-toggle-form" />
                                        <label for="menu-toggle-form" class="ttm-menu-toggle-block">
                                            <span class="toggle-block toggle-blocks-1"></span>
                                            <span class="toggle-block toggle-blocks-2"></span>
                                            <span class="toggle-block toggle-blocks-3"></span>
                                        </label>
                                    </div>
                                    <nav id="menu" class="menu">
                                        <ul class="dropdown">
                                            <li>
                                                <a href="{{ route('main') }}" class="{{ Request::routeIs('main') ? 'active' : '' }}">Home</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('service_page') }}" class="{{ Request::routeIs('service_page') || Request::routeIs('singleservice') ? 'active' : '' }}">Services</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('about_page') }}"  class="{{ Request::routeIs('about_page') ? 'active' : '' }}">About Us</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('team_page') }}"  class="{{ Request::routeIs('team_page') ? 'active' : '' }}">Team</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('gallery_page') }}"  class="{{ Request::routeIs('gallery_page') ? 'active' : '' }}">Gallery</a>
                                            </li>
                                            <li class="has-submenu">
                                                <a href="#"
                                                    class="@if (Request::routeIs('content_blog_page')) active @elseif(Request::routeIs('video_blog_page')) active @endif">Blog</a>
                                                <ul>
                                                    <li>
                                                        <a href="{{ route('content_blog_page') }}" class="{{ Request::routeIs('content_blog_page') ? 'active' : '' }}">Content</a>
                                                    </li>
                                                    <li>
                                                        <a href="{{ route('video_blog_page') }}"  class="{{ Request::routeIs('video_blog_page') ? 'active' : '' }}">Video</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="{{ route('contact_page') }}"  class="{{ Request::routeIs('contact_page') ? 'active' : '' }}">Contact</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- site-navigation end-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--header end-->

        @yield('section')

        <!--footer start-->
        <footer class="footer widget-footer clearfix">
            <div class="first-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ttm-footer-cta-wrapper ttm-textcolor-dark ttm-bgcolor-white">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 widget-area">
                                        <div class="featured-icon-box iconalign-before-heading ttm-icon_element-size-lg">
                                            <div class="featured-content">
                                                <div class="featured-icon d-none d-md-block">
                                                    <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                                        <i class="ti ti-email"></i>
                                                    </div>
                                                </div>
                                                <div class="featured-title">
                                                    <h5 class="text-center text-md-left">Subscribe To Our Newsletter</h5>
                                                    <h6 class="text-center text-md-left">আমাদের নিউজলেটার সাবস্ক্রাইব করে আমাদের সাথে থাকুন।</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 widget-area">
                                        <form id="subscribe-form" class="newsletter-form" method="post" action="{{ route('newsletter') }}" data-mailchimp="true">
                                            @csrf
                                            <div class="mailchimp-inputbox clearfix" id="subscribe-content">
                                                <p><input type="email" name="email" placeholder="Email Address.." required></p>
                                                <p><input type="submit" value="SUBSCRIBE"></p>
                                            </div>
                                            <div id="subscribe-msg"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <div class="second-footer ttm-textcolor-white">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 widget-area">
                            <div class="widget clearfix">
                                <div class="footer-logo text-center text-md-left">
                                    <a href="{{ route('main') }}">
                                        <img id="footer-logo-img" class="img-center" src="{{ url('frontend/images/logo.png') }}" alt="">
                                    </a>
                                </div>
                                <p class="text-center text-md-left">ইন্টেরিয়র বাংলাদেশ একটি গতিশীল এবং উদ্ভাবনী কোম্পানি। কোম্পানিটি ২০১৭ সালে প্রতিষ্ঠিত হয়। আমাদের প্রতিষ্ঠান আবাসিক বা বাণিজ্যিক বিভিন্ন ধরনের বাড়ি, অফিস এবং একাডেমিক সুবিধা ইত্যাদির অভ্যন্তরীণ কাজ পরিচালনা করে থাকে। আমাদের কোম্পানিতে আছে দক্ষ আর্কিটেক্ট এবং ইঞ্জিনিয়ার যারা দক্ষতার সাথে কাজ করে থাকে। আমাদের সম্পর্কে আরও ভালো ভাবে জানতে আমাদের সার্ভিস পেজ ভিজিট করুন।</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-1">
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 widget-area mt-0 mt-md-5">
                            <div class="widget widget_nav_menu clearfix">
                               <h3 class="widget-title sm-fixd-title  text-center text-md-left">Important Links</h3>
                                <ul id="menu-footer-services">
                                    <li>
                                        <a href="{{ route('privacy_policy_page') }}">Privacy Policy</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('about_page') }}">About Us</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('terms_of_service_page') }}">Terms of Service</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('contact_page') }}">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 widget-area  mt-0 mt-md-5">
                            <div class="widget flicker_widget clearfix">
                               <h3 class="widget-title sm-fixd-title  text-center text-md-left">Contact Us</h3>
                               <div class="">
                                    <div class="d-flex justify-content-center justify-content-md-start mt-2 footer_link" style="gap: 10px">
                                        <i class="fa fa-phone d-none d-md-block" style="margin-top: 5px;"></i>
                                        <a href="tel:01534-545945" class="text-center text-md-left">01534-545945</a>
                                    </div>
                                    <div class="d-flex justify-content-center justify-content-md-start mt-2 footer_link" style="gap: 10px">
                                        <i class="fa fa-envelope-o d-none d-md-block" style="margin-top: 5px;"></i>
                                        <a href="mailto:Interiorbangladesh@gmail.com" class="text-center text-md-left">Interiorbangladesh@gmail.com</a>
                                    </div>
                                    <div class="d-flex justify-content-center justify-content-md-start mt-2 footer_link" style="gap: 10px">
                                        <i class="fa fa-map-marker d-none d-md-block" style="margin-top: 5px;" aria-hidden="true"></i>
                                        <a href="https://goo.gl/maps/VaouWtsjwJTLmeM97" class="text-center text-md-left" target="_blank">Fahad Plaza, 4thFloor,Mutual Trust Bank Building, Mirpur 10, Dhaka</a>
                                    </div>
                                    <div>
                                        <h5 class="open_time mb-0 widget-title sm-fixd-title  text-center text-md-left">Opening Hour</h5>
                                        <div class="text-center text-md-left ">
                                            <i class="fa fa-clock-o d-none d-md-inline-block"></i>
                                            <span class="ml-1"> Sat - Friday : 09:00 am - 09:00 pm </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-footer-text ttm-textcolor-white">
                <div class="container">
                    <div class="row copyright">
                        <div class="col-md-8 ttm-footer2-left">
                            <span>Copyright © 2017 - {{ date('Y') }} DESIGN AND DEVELOPED BY CREATIVE SHEBA</span>
                        </div>
                        <div class="col-md-4 ttm-footer2-right">
                           <div class="social-icons">
                                <ul class="list-inline">
                                    <li><a href="https://www.facebook.com/bangladeshinterior"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-youtube-play"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--footer end-->

        <!--back-to-top start-->
        <a id="totop" href="#top">
            <i class="fa fa-angle-up"></i>
        </a>
        <!--back-to-top end-->
    </div>
    <!-- page end -->

    <script src="{{ url('frontend/js/jquery.min.js') }}"></script>
    <script src="{{ url('frontend/js/tether.min.js') }}"></script>
    <script src="{{ url('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('frontend/js/color-switcher.js') }}"></script>
    <script src="{{ url('frontend/js/jquery.easing.js') }}"></script>
    <script src="{{ url('frontend/js/jquery-waypoints.js') }}"></script>
    <script src="{{ url('frontend/js/jquery-validate.js') }}"></script>
    <script src="{{ url('frontend/js/owl.carousel.js') }}"></script>
    <script src="{{ url('frontend/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ url('frontend/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ url('frontend/js/numinate.min6959.js?ver=4.9.3') }}"></script>
    <script src="{{ url('frontend/js/main.js') }}"></script>
    <script type="text/javascript" src="{{ url('frontend/js/lightgallery.min.js') }}"></script>
    <script type="text/javascript" src="{{ url('frontend/js/lg-thumbnail.min.js') }}"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.js"></script>
    @yield('jss')
    <script>
        window.setTimeout(function() {
            $(".alert-newsletter").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove();
            });
        }, 5000);
    </script>
    <script type="text/javascript">
        $('.counter').counterUp({
            delay: 5,
            time: 500
        });
    </script>
    <script>
        lightGallery(document.getElementById('rhishi'), {
            controls: true,
            counter: false,
            showCloseIcon: true,
            download: false,
            plugins: [lgThumbnail],
            loop: false,
            thumbnail: true,
            mobileSettings: {
              close: true
            }
        });
    </script>
    <script type="text/javascript">
            var $grid = $('.item-alls').isotope({
              // options
            });
            // filter items on button click
            $('.item-menu').on( 'click', 'button', function() {
              var filterValue = $(this).attr('data-filter');
              $grid.isotope({ filter: filterValue });
            });
    </script>
    <script>
        $('.carousel').carousel({
          interval: 3500,
          pause: false
        })
    </script>
    <script>
        AOS.init({
            offset: 200,
            duration:3000
        });
    </script>
    <script>
        $(document).ready(function() {

        setTimeout(function() {
            $('#ctn-preloader').addClass('loaded');
            // Una vez haya terminado el preloader aparezca el scroll
            $('body').removeClass('no-scroll-y');

            if ($('#ctn-preloader').hasClass('loaded')) {
            // Es para que una vez que se haya ido el preloader se elimine toda la seccion preloader
            $('#preloader').delay(1000).queue(function() {
                $(this).remove();
            });
            }
        }, 3000);

        });
    </script>
    <!-- Javascript end-->
</body>
</html>
