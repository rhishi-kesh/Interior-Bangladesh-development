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
                            <h1 class="title">About Us</h1>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a href="{{ route('main') }}">
                                    <i class="ti ti-home"></i>
                                </a>
                            </span>
                            <span class="ttm-bread-sep">&nbsp; / &nbsp;</span>
                            <span class="page-title"><span>About Us</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page-title end -->

    <div class="site-main">
        <!--choose-us-section-start-->
        <section class="ttm-row about4-section ttm-bgcolor-white bg-img16 break-991-colum clearfix about-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-sm-12 align-self-center">
                        <!-- section title -->
                        <div class="section-title clearfix">
                            <div class="title-header sm-fixd-title">
                                <h2 class="title text-uppercase">Why Choose Us</h2>
                            </div>
                        </div><!-- section title end -->
                        <p class="text-center text-md-left">{{ $about->choose_us }}</p>
                    </div>
                    <div class="col-lg-5 col-sm-12 align-self-center">
                        <img src="{{ url('images/about') }}/{{ $about->choose_us_image }}" alt="img" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
        <!--choose-us-section-end-->

        <!--our-mission-section-start-->
        <section class="ttm-row about4-section ttm-bgcolor-white bg-img16 break-991-colum clearfix about-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-sm-12 align-self-cente order-1 order-md-0">
                        <img src="{{ url('images/about') }}/{{ $about->mission_image }}" alt="img" class="img-fluid">
                    </div>
                    <div class="col-lg-7 col-sm-12 align-self-center order-0 order-md-1 text-right">
                        <!-- section title -->
                        <div class="section-title clearfix">
                            <div class="title-header title-header-left sm-fixd-title">
                                <h2 class="title text-uppercase">Our Mission</h2>
                            </div>
                        </div><!-- section title end -->
                        <p class="text-center text-md-right">{{ $about->mission }}</p>
                    </div>
                </div>
            </div>
        </section>
        <!--our-mission-section-end-->

        <!--our-Vision-section-start-->
        <section class="ttm-row about4-section ttm-bgcolor-white bg-img16 break-991-colum clearfix about-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-sm-12 align-self-center">
                        <!-- section title -->
                        <div class="section-title clearfix">
                            <div class="title-header sm-fixd-title">
                                <h2 class="title text-uppercase">Our Vision</h2>
                            </div>
                        </div><!-- section title end -->
                        <p class="text-center text-md-left">{{ $about->vision }}</p>
                    </div>
                    <div class="col-lg-5 col-sm-12 align-self-center ">
                        <img src="{{ url('images/about') }}/{{ $about->vision_image }}" alt="img" class="img-fluid">
                    </div>
                </div>
            </div>
        </section>
        <!--our-Vision-section-end-->

        <!-- about-history-start -->
        <section class="element-row element-style about-process">
            <div class="container">
                <div class="row ttm-fid-row-wrapper">
                    <div class="col-md-3 col-sm-6">
                        <div class="ttm-fid inside ttm-fid-view-lefticon">
                            <div class="ttm-fid-left">
                                <h4 class="ttm-fid-inner">
                                    <i class="ti ti-briefcase"></i>
                                    <span class="counter">{{ $about->project_completed }}</span><span>+</span>
                                </h4>
                            </div>
                            <div class="ttm-fid-contents">
                                <h3 class="ttm-fid-title">Projects Completed</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="ttm-fid inside ttm-fid-view-lefticon">
                            <div class="ttm-fid-left">
                                <h4 class="ttm-fid-inner">
                                    <i class="ti ti-cup"></i>
                                    <span class="counter">{{ $about->ongogin_project }}</span><span>+</span>
                                </h4>
                            </div>
                            <div class="ttm-fid-contents">
                                <h3 class="ttm-fid-title">Ongoing  Projects</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="ttm-fid inside ttm-fid-view-lefticon">
                            <div class="ttm-fid-left">
                                <h4 class="ttm-fid-inner">
                                    <i class="ti ti-user"></i>
                                    <span class="counter">{{ $about->employe }}</span><span>+</span>
                                </h4>
                            </div>
                            <div class="ttm-fid-contents">
                                <h3 class="ttm-fid-title">Work Employed</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="ttm-fid inside ttm-fid-view-lefticon">
                            <div class="ttm-fid-left">
                                <h4 class="ttm-fid-inner">
                                    <i class="ti ti-cup"></i>
                                    <span class="counter">{{ $about->experiance }}</span><span>+</span>
                                </h4>
                            </div>
                            <div class="ttm-fid-contents">
                                <h3 class="ttm-fid-title">Years Experiance</h3>
                            </div>
                        </div>
                    </div>
                </div><!-- row end-->
            </div>
        </section>
        <!-- about-history-end -->

        <!-- Working Process start -->
        <section class="ttm-row processbox-section break-991-colum clearfix work-process">
            <div class="container">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="section-title with-desc title-style-center_text clearfix">
                            <div class="title-header">
                                <h2 class="title">Our Working Process</h2>
                            </div>
                            <div class="title-desc">Raising a heavy fur muff that covered the whole of her lower arm towards the viewer regor then turned to look out the window</div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row works">
                   <div class="col-12 col-md-6 col-lg-4 pt-70">
                       <div class="card text-center">
                           <div class="work-process-number">
                               01
                           </div>
                           <h4 class="card-title">Idea & Design</h4>
                           <p>With righteous indignation and works off beguiled demoralized charm.</p>
                           <i class="fa fa-handshake-o" aria-hidden="true"></i>
                       </div>
                   </div>
                   <div class="col-12 col-md-6 col-lg-4 pt-70">
                       <div class="card text-center">
                           <div class="work-process-number">
                               02
                           </div>
                           <h4 class="card-title">Specification</h4>
                           <p>Our power of choice is untrammelled and when nothing prevents.</p>
                           <i class="fa fa-rocket" aria-hidden="true"></i>
                       </div>
                   </div>
                   <div class="col-12 col-md-6 col-lg-4 pt-70">
                       <div class="card text-center mb-40">
                           <div class="work-process-number">
                               03
                           </div>
                           <h4 class="card-title">Execution</h4>
                           <p>Wing to the claims of duty the obligations will frequently occur.</p>
                           <i class="fa fa-handshake-o" aria-hidden="true"></i>
                       </div>
                   </div>
                </div>
            </div>
        </section>
        <!-- Working Process end -->
    </div>
@endsection
