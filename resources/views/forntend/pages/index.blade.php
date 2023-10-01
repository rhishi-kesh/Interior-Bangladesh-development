@extends('forntend.master')
@section('section')
<div id="herosection" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        @forelse ($sliders as $key => $slider)
            <div class="carousel-item {{ $key == '0' ? 'active' : '' }}">
                @if ($slider->background)
                <img class="d-block w-100" src="{{ url('images/slider') }}/{{ $slider->background }}" class="img-fluid" alt="img">
                @endif
                <div class="carousel-caption">
                    <h1 class="mb-0 mb-lg-2 animate__animated animate__fadeInLeft animate__delay-.5s">{{ $slider->title }}</h1>
                    <p class="mb-0 mb-lg-2 animate__animated animate__fadeInRight animate__delay-1s">{{ $slider->subtitle }}</p>
                    <a href="{{ $slider->btn_link }}" class="go-product animate__animated animate__fadeInUp animate__delay-2s">{{ $slider->btn_text }}</a>
                </div>
            </div>
        @empty
            <div style="height: 100vh"></div>
        @endforelse
    </div>
    <a class="carousel-control-prev" href="#herosection" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#herosection" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!--site-main start-->
  <div class="site-main">
      <!--about-section-->
      <section class="ttm-row about4-section ttm-bgcolor-white bg-img16 break-991-colum clearfix about-home">
          <div class="container">
              <div class="row">
                  <div class="col-lg-7 col-sm-12 align-self-center">
                      <!-- section title -->
                      <div class="section-title clearfix">
                          <div class="title-header sm-fixd-title">
                              <h2 class="title text-uppercase text-center text-md-left">{{ __('messages.choose_us') }}</h2>
                          </div>
                      </div><!-- section title end -->
                      <p class="text-center text-md-left">{{ $about->choose_us }}</p>
                      <div class="row ttm-fid-row-wrapper">
                          <div class="col-12 col-sm-4">
                              <!-- ttm-fid -->
                              <div class="ttm-fid inside ttm-fid-view-lefticon">
                                  <div class="ttm-fid-left">
                                      <h4 class="ttm-fid-inner">
                                          <i class="ti ti-briefcase"></i>
                                          <span class="counter">{{ $about->project_completed }} </span><span>+</span>
                                      </h4>
                                  </div>
                                  <div class="ttm-fid-contents">
                                      <h3 class="ttm-fid-title">{{ __('messages.project_complete') }}</h3>
                                  </div>
                              </div><!-- ttm-fid end-->
                          </div>
                          <div class="col-12 col-sm-4">
                              <!-- ttm-fid -->
                              <div class="ttm-fid inside ttm-fid-view-lefticon">
                                  <div class="ttm-fid-left">
                                      <h4 class="ttm-fid-inner">
                                          <i class="ti ti-user"></i>
                                          <span class="counter">{{ $about->employe }} </span><span>+</span>
                                      </h4>
                                  </div>
                                  <div class="ttm-fid-contents">
                                      <h3 class="ttm-fid-title">{{ __('messages.employed') }}</h3>
                                  </div>
                              </div><!-- ttm-fid end -->
                          </div>
                          <div class="col-12 col-sm-4">
                              <!-- ttm-fid -->
                              <div class="ttm-fid inside ttm-fid-view-lefticon">
                                  <div class="ttm-fid-left">
                                      <h4 class="ttm-fid-inner">
                                          <i class="ti ti-cup"></i>
                                          <span class="counter">{{ $about->experiance }} </span><span>+</span>
                                      </h4>
                                  </div>
                                  <div class="ttm-fid-contents">
                                      <h3 class="ttm-fid-title">{{ __('messages.experience') }}</h3>
                                  </div>
                              </div><!-- ttm-fid end -->
                          </div>
                      </div>
                      <div class="text-center text-md-left">
                          <a href="{{ route('about_page') }}" class="go-about btn text-white">{{ __('messages.choose_us_btn') }}</a>
                      </div>
                  </div>
                  <div class="col-lg-5 col-sm-12 align-self-center d-none d-lg-block">
                      <img src="{{ url('images/about') }}/{{ $about->choose_us_image }}" alt="img" class="img-fluid">
                  </div>
              </div>
          </div>
      </section>
      <!--about-section end-->

      <!-- service-section -->
      <section class="ttm-row services2-section home4-services2-section bg-img4 clearfix service-home">
          <div class="container">
              <!-- row -->
              <div class="row">
                  <div class="col-md-2"></div>
                  <div class="col-md-8">
                      <!-- section title -->
                      <div class="section-title with-desc title-style-center_text clearfix">
                          <div class="title-header">
                              <h2 class="title text-white">{{ __('messages.service_title') }}</h2>
                          </div>
                          <div class="title-desc mb-40 text-white">{{ __('messages.service_subtitle') }}</div>
                      </div><!-- section title end -->
                  </div>
                  <div class="col-md-2"></div>
              </div>
              <div class="row servicess item-details">
                @forelse ($services as $service)
                    <div class="col-12 col-md-6 col-lg-4 col-sm-4 mt-2">
                      <div class="service-item">
                          <div class="service-img">
                              <img src="{{ url('images/service') }}/{{ $service->service_image }}" alt="img1" class="img-fluid" style="width: 100%; height: 300px; object-fit: cover; object-position: center center;">
                          </div>
                          <div class="service-details text-center">
                              <h3>
                                  <a href="{{ route('singleservice', $service->slug) }}">{{ $service->service_name }}</a>
                              </h3>
                          </div>
                      </div>
                  </div>
                @empty
                    <div>No Service Found</div>
                @endforelse
              </div>
              <div class="row service-btns">
                  <div class="col-lg-12">
                      <div class="text-center">
                          <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-black mb-10" href="{{ route('service_page') }}">{{ __('messages.service_btn') }}</a>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- service-section end-->

      <!-- OUR PRESTIGIOUS CLIENTS start -->
      <section class="ttm-row clearfix">
          <div class="container">
              <!-- row -->
              <div class="row">
                  <div class="col-md-2"></div>
                  <div class="col-md-8">
                      <!-- section title -->
                      <div class="section-title with-desc title-style-center_text clearfix">
                          <div class="title-header">
                              <h2 class="title">{{ __('messages.our_client') }}</h2>
                          </div>
                          <div class="title-desc mb-40">{{ __('messages.our_client_subtitle') }}</div>
                      </div><!-- section title end -->
                  </div>
                  <div class="col-md-2"></div>
              </div>
              <!-- row -->
              <!-- row -->
              <div class="row">
                  <div class="portfolio-slide owl-carousel ttm-boxes-spacing-5px owl-theme owl-loaded mt-5" data-item="5" data-nav="false" data-dots="false" data-auto="false">
                      <!-- featured-imagebox -->
                        @forelse ($clients as $client)
                            <div class="featured-imagebox featured-imagebox-portfolio">
                                <div class="text-center">
                                    <img class="img-fluid" src="{{ url('images/client') }}/{{ $client->client_logo }}" alt="image" >
                                </div>
                            </div>
                        @empty
                            <div>Logos Not Found</div>
                        @endforelse

                  </div>
              </div>
          </div>
      </section>
      <!-- OUR PRESTIGIOUS CLIENTS end-->

      <!-- Team start-->
      <section class="element-row element-style team-home">
          <div class="container">
              <div class="row justify-content-center text-center">
                  <div class="col-12 col-md-8">
                        <div class="section-title with-desc title-style-center_text clearfix">
                            <div class="title-header">
                                <h2 class="title text-center text-uppercase mt-4 mt-md-0">{{ __('messages.team_title') }}</h2>
                            </div>
                            <p class="title-desc">{{ __('messages.team_subtitle') }}</p>
                        </div>
                  </div>
              </div>
              <!-- row -->
              <div class="row">
                @forelse ($teams as $team)
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <!-- featured-imagebox-team -->
                        <div class="featured-imagebox featured-imagebox-team ttm-team-box-view-overlay">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{ url('images/team') }}/{{ $team->team_image }}" alt="image" style="width: 100%; height: 350px; object-fit: cover; object-position: center center;">
                            </div>
                            <div class="featured-content featured-content-team">
                                <div class="featured-title">
                                    <h5>{{ $team->member_name }}</h5>
                                </div>
                                <p class="category">{{ $team->position }}</p>
                            </div>
                        </div><!-- featured-imagebox-team end-->
                    </div>
                @empty
                    <div>Team Not Found</div>
                @endforelse

              </div><!-- row end -->
              <div class="row service-btns">
                  <div class="col-lg-12">
                      <div class="text-center mt-60">
                          <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-black mb-10" href="{{ route('team_page') }}">{{ __('messages.team_btn') }}</a>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- Team end -->

      <!-- Working Process start -->
      <section class="ttm-row processbox-section break-991-colum clearfix work-process">
          <div class="container">
              <div class="row">
                  <div class="col-md-2"></div>
                  <div class="col-md-8">
                      <div class="section-title with-desc title-style-center_text clearfix">
                          <div class="title-header">
                              <h2 class="title text-uppercase">{{ __('messages.work_process_title') }}</h2>
                          </div>
                          <div class="title-desc">{{ __('messages.work_process_subtitle') }}</div>
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
                         <h4 class="card-title">{{ __('messages.process1_title') }}</h4>
                         <p>{{ __('messages.process1_subtitle') }}</p>
                         <i class="fa fa-handshake-o" aria-hidden="true"></i>
                     </div>
                 </div>
                 <div class="col-12 col-md-6 col-lg-4 pt-70">
                     <div class="card text-center">
                         <div class="work-process-number">
                             02
                         </div>
                         <h4 class="card-title">{{ __('messages.process2_title') }}</h4>
                         <p>{{ __('messages.process2_subtitle') }}</p>
                         <i class="fa fa-rocket" aria-hidden="true"></i>
                     </div>
                 </div>
                 <div class="col-12 col-md-6 col-lg-4 pt-70">
                     <div class="card text-center">
                         <div class="work-process-number">
                             03
                         </div>
                         <h4 class="card-title">{{ __('messages.process3_title') }}</h4>
                         <p>{{ __('messages.process3_subtitle') }}</p>
                         <i class="fa fa-handshake-o" aria-hidden="true"></i>
                     </div>
                 </div>
              </div>
          </div>
      </section>
      <!-- Working Process end -->

      <!-- our Blog start -->
      <section class="ttm-row service-home blog-home">
          <div class="container">
              <!-- row -->
              <div class="row">
                  <div class="col-md-2"></div>
                  <div class="col-md-8">
                      <!-- section title -->
                      <div class="section-title with-desc title-style-center_text clearfix">
                          <div class="title-header">
                              <h2 class="title text-white text-uppercase">{{ __('messages.blog_title') }}</h2>
                          </div>
                          <div class="title-desc mb-40 text-white">{{ __('messages.blog_subtitle') }}</div>
                      </div><!-- section title end -->
                  </div>
                  <div class="col-md-2"></div>
              </div>
              <div class="row servicess blogss">
                @forelse ($blogs as $blog)
                    <div class="col-12 col-md-6 col-lg-4 col-sm-4 mt-4">
                      <div class="featured-imagebox featured-imagebox-post">
                          <div class="featured-thumbnail">
                              <img class="img-fluid" src="{{ url('images/blog/content') }}/{{ $blog->blog_image }}" alt="" style="width: 100%; height: 300px; object-fit: cover; object-position: center center;">
                          </div>
                          <div class="featured-content featured-content-post">
                              <div class="post-meta">
                                  <span class="ttm-meta-line"><i class="fa fa-calendar"></i>{{  date ( 'd/M/Y' , strtotime($blog->created_at) ) }}</span>
                              </div>
                              <div class="post-title featured-title">
                                  <h5><a href="{{ route('singlecontentblog', $blog->slug) }}">{{ Str::limit($blog->blog_title, 50, '...') }}</a></h5>
                              </div>
                          </div>
                      </div>
                  </div>
                @empty
                  <div>Blogs Not Found</div>
                @endforelse

              </div>
              <div class="row service-btns">
                  <div class="col-lg-12">
                      <div class="text-center mt-60">
                          <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-black mb-10" href="{{ route('content_blog_page') }}">{{ __('messages.blog_btn') }}</a>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- our Blog end -->

      <!-- Testmonails start -->
      <section class="ttm-row clearfix Testmonails">
          <div class="container">
              <!-- row -->
              <div class="row">
                  <div class="col-md-2"></div>
                  <div class="col-md-8">
                      <!-- section title -->
                      <div class="section-title with-desc title-style-center_text clearfix">
                          <div class="title-header">
                              <h2 class="title">{{ __('messages.client_review_title') }}</h2>
                          </div>
                          <div class="title-desc mb-40 mb-0">{{ __('messages.client_review_subtitle') }}</div>
                      </div><!-- section title end -->
                  </div>
                  <div class="col-md-2"></div>
              </div>
              <!-- row -->
              <!-- row -->
              <div class="row">
                  <!-- wrap-testimonial -->
                  <div class="testimonial-slide text-center owl-carousel" data-item="1" data-nav="false" data-dots="false" data-auto="false">
                      <!-- testimonials -->
                      @forelse ($reviews as $review)
                        <div class="testimonials">
                          <div class="testimonial-content mb-35">
                              <blockquote class="table-dark">
                                  <q>{{ $review->client_speech }}</q>
                              </blockquote>
                              <div class="testimonial-avatar d-flex justify-content-center">
                                  <div class="testimonial-img card1">
                                      <div class="face {{ $review->client_video_speech == '' ? '' : 'face1'}}">
                                          <img style="object-fit: cover" class="img-center" src="{{ url('images/review') }}/{{ $review->client_image }}" alt="testimonial-img" style="object-position: center center; object-fit: cover" >
                                      </div>
                                      @if($review->client_video_speech)
                                        <div class="face face2">
                                            <div class="video">
                                                <a href="" target="_blank">
                                                    <i class="fa fa-play"></i>
                                                </a>
                                            </div>
                                        </div>
                                    @endif
                                  </div>
                              </div>
                               <div class="testimonial-caption">
                                  <h4 class="mb-1 mt-3 clint-name">{{ $review->client_name }}</h4>
                                  <label class="mb-0">
                                      <small>{{ $review->client_city }}</small>
                                  </label>
                              </div>
                          </div>
                      </div>
                      @empty
                      <div>Review Not Found</div>
                      @endforelse

                  </div>
              </div>
          </div>
      </section>
      <!-- Testmonails end -->
  </div>
  <!--site-main end-->
@endsection
