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
                            <h1 class="title">{{ __('messages.contact') }}</h1>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a href="{{ route('main') }}"><i class="ti ti-home"></i></a>
                            </span>
                            <span class="ttm-bread-sep">&nbsp; / &nbsp;</span>
                            <span class="page-title"><span>{{ __('messages.contact') }}</span></span>
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
                @if(Session::has('success'))
                    <div class="alert alert-contact alert-success border-0 fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>{{ Session::get('success') }}</strong>
                    </div>
                @endif
                @section('jss')
                    <script>
                        window.setTimeout(function() {
                            $(".alert-contact").fadeTo(500, 0).slideUp(500, function(){
                                $(this).remove();
                            });
                        }, 4000);
                    </script>
                @endsection
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8 text-center">
                        <h2 class="text-uppercase title">{{ __('messages.contact_title') }}</h2>
                        <p class="title-desc">{{ __('messages.contact_subtitle') }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-6 mt-4">
                        <div class="img-holder">
                            <img src="{{ url('frontend/images/contact.JPG') }}" alt="contact_img" class="img-fluid">
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
                                            <h5>{{ __('messages.phone') }}:</h5>
                                            <p>{{ __('messages.number') }}</p>
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
                                            <h5>{{ __('messages.email') }}:</h5>
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
                                            <h5>{{ __('messages.address') }}:</h5>
                                            <p>{{ __('messages.locatiion') }}</p>
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
                                            <h5>{{ __('messages.opening_hour') }}:</h5>
                                            <p>{{ __('messages.opening_hour_time') }}</p>
                                        </div>
                                    </div>
                                </div>
                                <!--End single item-->
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 mt-4">
                        <div class="contact-form-v1">
                            <form action="{{ route('contact_page_send') }}" method="POST">
                                @csrf
                                <input type="text" name="name" value="{{ old('name') }}" placeholder="{{ __('messages.name_feild') }}" class="@error('name') is-invalid @enderror" required>
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <input type="email" name="email" value="{{ old('email') }}" placeholder="{{ __('messages.email_feild') }}" class="mt-4 @error('email') is-invalid @enderror" required>
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <input type="number" name="phone" class="mt-4 @error('phone') is-invalid @enderror" value="{{ old('phone') }}" placeholder="{{ __('messages.phone_feild') }}">
                                @error('phone')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <textarea name="message" class="mt-4 @error('message') is-invalid @enderror" placeholder="{{ __('messages.massage') }}" required rows="6">{{ old('message') }}</textarea>
                                @error('message')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <button class="ttm-btn ttm-btn-size-sm ttm-btn-shape-square ttm-icon-btn-right ttm-btn-style-fill ttm-btn-bgcolor-skincolor" type="submit">
                                    <span>{{ __('messages.contact_btn') }}</span>
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
