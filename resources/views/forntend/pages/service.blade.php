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
        <section class="ttm-row services2-section pb-110 clearfix service-section">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- section title -->
                        <div class="section-title clearfix">
                            <div class="title-header sm-fixd-title">
                                <h2 class="title text-uppercase">Our services</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @forelse ($services as $service)
                        <div class="col-12 col-md-6 col-lg-4 col-sm-4 mt-2">
                            <div class="service-item">
                                <div class="service-img">
                                    <img src="{{ url('images/service') }}/{{ $service->service_image }}" alt="img1" class="img-fluid" style="width: 100%; height: 300px; object-fit: cover;">
                                </div>
                                <div class="service-details text-center">
                                    <h3>
                                        <a href="{{ route('singleservice', $service->slug) }}">{{ $service->service_name }}</a>
                                    </h3>
                                    <p>{{ Str::limit($service->service_name, 58, '...') }}</p>
                                </div>
                            </div>
                        </div>
                    @empty

                    @endforelse

                </div>
            </div>
        </section>
    </div>
    <!--site-main end-->
@endsection
