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
                            <h1 class="title">Service</h1>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a href="{{ route('main') }}"><i class="ti ti-home"></i></a>
                            </span>
                            <span class="ttm-bread-sep">&nbsp; / &nbsp;</span>
                            <span class="page-title"><span>Service</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page-end -->
    <div class="site-main">
        <!-- sidebar -->
        <div class="sidebar service-content ttm-sidebar-left ttm-bgcolor-white break-991-colum clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-12 col-lg-3 widget-area sidebar-left ttm-col-bgcolor-yes ttm-bg ttm-left-span ttm-bgcolor-grey">
                        <aside class="widget widget-nav-menu">
                            <ul class="widget-menu">
                                @foreach ($service_category as $category)
                                    <li class="mt-2 {{-- App\Models\Service::where('slug',$category->id)?'active':'' --}}">
                                        <a href="{{ route('singleservice',$category->slug) }}">{{ $category->service_name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </aside>
                    </div>
                    <div class="col-12 col-lg-8 content-area">
                        <!-- ttm-service-single-content-are -->
                        <div class="ttm-service-single-content-area">
                            <!-- section title -->
                            <div class="section-title without-sep-line clearfix">
                                <div class="title-header">
                                    <div class="">
                                        <img src="{{ url('images/service') }}/{{ $procuct->service_image }}" alt="img" class="img-fluid" style="width: 100%; height: 400px; object-fit: cover; object-position: center center;">
                                    </div>
                                    <h2 class="title mt-4 text-uppercase text-center text-md-left">{{ $procuct->service_name }}</h2>
                                    <p class="text-center text-md-left">{{ $procuct->service_subtitle }}</p>
                                    <h4 class="title">How to get this service?</h4>
                                    <p>নির্মাণ সাইট বা আপনার স্বপ্নের প্রকল্প সম্পর্কে কোন পরামর্শ নিতে আপনি আমাদের সাথে যোগাযোগ করুন এবং আপনার প্রয়োজনীয়তা সম্পর্কে আলোচনা করুন  অনলাইন অথবা অফলাইনের উভয় মাধ্যমে।</p>
                                    <ul>
                                        <li>ফোনে যোগাযোগের মাধ্যমে</li>
                                        <li>ই-মেইল এর মাধ্যমে</li>
                                        <li>আমাদের ফেসবুক পেইজ এর মাধ্যমে</li>
                                        <li>সরাসরি অফিস ভিজিটিং এর মাধ্যমে</li>
                                    </ul>
                                    <!--actionbox-section-->
                                    <section class="service-foorer ttm-row actionbox-section ttm-bgcolor-skincolor ttm-textcolor-white ttm-reset-content-center-991 clearfix">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mt-5 text-center ttm-reset-content-center-991">
                                                        <h4 class="text-white">সার্ভিস সম্পর্কে বিস্তারিত জানতে আমাদের সাথে যোগাযোগ করুন।</h4>
                                                    </div>
                                                </div>
                                                <div class="col-12 d-flex justify-content-center s-buttons mt-3 mb-0">
                                                    <div>
                                                        <a href="" class="play">
                                                            <i class="fa fa-play"></i>
                                                        </a>
                                                    </div>
                                                    <div class="ml-3">
                                                        <a href="contact.html" class="contact">
                                                            contact us
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <!--actionbox-section end-->

                                </div>
                            </div>
                        </div>
                        <!-- ttm-service-single-content-are end -->
                    </div>
                </div><!-- row end -->
            </div>
        </div>
        <!-- sidebar end -->
    </div>
    <!--site-main end-->
@endsection
