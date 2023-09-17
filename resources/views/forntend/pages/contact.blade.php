@extends('forntend.master')
@section('section')
    <!-- page-title -->
    <div class="ttm-page-title-row">
        <div class="ttm-page-title-row-bg-layer ttm-bg-layer"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-box ttm-textcolor-white">
                        <div class="page-title-heading">
                            <h1 class="title">Contact</h1>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a href="index.html"><i class="ti ti-home"></i></a>
                            </span>
                            <span class="ttm-bread-sep">&nbsp; / &nbsp;</span>
                            <span class="page-title"><span>Contact</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page-title-end -->

    <!-- site-main -->
    <div class="site-main">
        <section class="contact py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8 text-center">
                        <h2 class="text-uppercase title">Get Touch with Us</h2>
                        <p class="title-desc">If you would like to get in contact with the Interior, you have a number of options you can call or mail to below option, our team will support you as soon as possible.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-6 mt-4">
                        <div class="img-holder">
                            <img src="assets/images/slides/slide-2.jpg" alt="contact_img" class="img-fluid">
                        </div>
                        <div class="contact-info">
                            <div class="row mt-3">
                                <!--Start single item-->
                                <div class="col-md-6 mt-3">
                                    <div class="single-item d-flex justify-content-start">
                                        <div class="icon-holder">
                                            <span>
                                                <i class="fa fa-phone"></i>
                                            </span>
                                        </div>
                                        <div class="text-holder">
                                            <h5>Phone:</h5>
                                            <p>01534-545945</p>
                                        </div>
                                    </div>
                                </div>
                                <!--End single item-->
                                <!--Start single item-->
                                <div class="col-md-6 mt-3">
                                    <div class="single-item d-flex justify-content-start">
                                        <div class="icon-holder">
                                            <span>
                                                <i class="fa fa-envelope-o"></i>
                                            </span>
                                        </div>
                                        <div class="text-holder">
                                            <h5>Email Address:</h5>
                                            <p>Interiorbangladesh@gmail.com</p>
                                        </div>
                                    </div>
                                </div>
                                <!--End single item-->
                                <!--Start single item-->
                                <div class="col-md-6 mt-3">
                                    <div class="single-item d-flex justify-content-start">
                                        <div class="icon-holder">
                                            <span>
                                                <i class="fa fa-map-marker"></i>
                                            </span>
                                        </div>
                                        <div class="text-holder">
                                            <h5>Address:</h5>
                                            <p>Fahad Plaza, 4thFloor,Mutual Trust Bank Building, Mirpur 10, Dhaka</p>
                                        </div>
                                    </div>
                                </div>
                                <!--End single item-->
                                <!--Start single item-->
                                <div class="col-md-6 mt-3">
                                    <div class="single-item d-flex justify-content-start">
                                        <div class="icon-holder">
                                            <span>
                                                <i class="fa fa-clock-o"></i>
                                            </span>
                                        </div>
                                        <div class="text-holder">
                                            <h5>Working Hours:</h5>
                                            <p>Sat - Friday : 09:00 am - 09:00 pm</p>
                                        </div>
                                    </div>
                                </div>
                                <!--End single item-->
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 mt-4">
                        <div class="contact-form-v1">
                            <form id="contact-form" name="contact_form" action="" method="post" novalidate="novalidate">
                                <input type="text" name="form_name" value="" placeholder="Your Name*" class="" required="" aria-required="true">
                                <input type="email" name="form_email" value="" placeholder="Your E-mail*" class="mt-4" required="" aria-required="true">
                                <input type="text" name="form_phone" class="mt-4" value="" placeholder="Phone">
                                <textarea name="form_message" class="mt-4" placeholder="Your Message.." required="" aria-required="true" rows="6"></textarea>
                                <input id="form_botcheck" name="form_botcheck" type="hidden" value="">
                                <button class="ttm-btn ttm-btn-size-sm ttm-btn-shape-square ttm-icon-btn-right ttm-btn-style-fill ttm-btn-bgcolor-skincolor" type="submit">
                                    <span>send message</span>
                                    <i class="ti ti-angle-double-right"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row mt-4 pt-5">
                    <div class="col-12">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.326591125598!2d90.36960409999999!3d23.806982899999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0d683db8e21%3A0xe7ec7abd4260a40d!2sMutual%20Trust%20Bank%20Limited%20(MTBL)!5e0!3m2!1sen!2sbd!4v1692871739326!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- site-main-end -->
@endsection
