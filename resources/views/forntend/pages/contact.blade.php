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
                                <a href="{{ route('main') }}"><i class="ti ti-home"></i></a>
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
                        <h2 class="text-uppercase title">Get Touch with Us</h2>
                        <p class="title-desc">আমরা সবসময় আপনার প্রশ্নের উত্তর দিতে এবং আপনার ফিডব্যাক শুনতে প্রস্তুত।আপনি ফোন, ইমেল বা সোশ্যাল মিডিয়ার মাধ্যমে আমাদের সাথে যোগাযোগ করতে পারেন।ইন্টেরিয়র বাংলাদেশকে বেছে নেয়ার জন্য আপনাকে ধন্যবাদ!</p>
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
                            <form action="{{ route('contact_page_send') }}" method="POST">
                                @csrf
                                <input type="text" name="name" value="{{ old('name') }}" placeholder="Your Name*" class="@error('name') is-invalid @enderror" required>
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <input type="email" name="email" value="{{ old('email') }}" placeholder="Your E-mail*" class="mt-4 @error('email') is-invalid @enderror" required>
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <input type="number" name="phone" class="mt-4 @error('phone') is-invalid @enderror" value="{{ old('phone') }}" placeholder="Phone">
                                @error('phone')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <textarea name="message" class="mt-4 @error('message') is-invalid @enderror" placeholder="Your Message.." required rows="6">{{ old('message') }}</textarea>
                                @error('message')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
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
