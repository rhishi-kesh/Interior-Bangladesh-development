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
                              <h2 class="title text-uppercase text-center text-md-left">Why Choose Us</h2>
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
                                          <span class="counter">{{ $about->project_completed }}</span><span>+</span>
                                      </h4>
                                  </div>
                                  <div class="ttm-fid-contents">
                                      <h3 class="ttm-fid-title">Projects Completed</h3>
                                  </div>
                              </div><!-- ttm-fid end-->
                          </div>
                          <div class="col-12 col-sm-4">
                              <!-- ttm-fid -->
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
                              </div><!-- ttm-fid end -->
                          </div>
                          <div class="col-12 col-sm-4">
                              <!-- ttm-fid -->
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
                              </div><!-- ttm-fid end -->
                          </div>
                      </div>
                      <div class="text-center text-md-left">
                          <a href="{{ route('about_page') }}" class="go-about btn text-white">Explore More</a>
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
                              <h2 class="title text-white">OUR SERVICE</h2>
                          </div>
                          <div class="title-desc mb-40 text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, accusantium id. Rem unde vel ut eaque pariatur?</div>
                      </div><!-- section title end -->
                  </div>
                  <div class="col-md-2"></div>
              </div>
              <div class="row servicess item-details">
                @forelse ($services as $service)
                    <div class="col-12 col-md-6 col-lg-4 col-sm-4 mt-2">
                      <div class="service-item">
                          <div class="service-img">
                              <img src="{{ url('images/service') }}/{{ $service->service_image }}" alt="img1" class="img-fluid">
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
                          <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-black mb-10" href="{{ route('service_page') }}">Explore More Services</a>
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
                              <h2 class="title">OUR PRESTIGIOUS CLIENTS</h2>
                          </div>
                          <div class="title-desc mb-40">We have been working with various clients, catering to their diverse needs. Our portfolio will show you the range of our services.</div>
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
                                    <img class="img-fluid" src="{{ url('images/client') }}/{{ $client->client_logo }}" alt="image">
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
                      <div class="section-title clearfix">
                          <h2 class="title text-center text-uppercase">Team Member</h2>
                          <p class="title-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus quidem, perspiciatis voluptatum nobis laudantium quae!</p>
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
                                <img class="img-fluid" src="{{ url('images/team') }}/{{ $team->team_image }}" alt="image" style="max-height: 400px; max-width: 360px">
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
                          <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-black mb-10" href="{{ route('team_page') }}">Explore More Members</a>
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
                              <h2 class="title text-uppercase">Our Working Process</h2>
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
                     <div class="card text-center">
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
                              <h2 class="title text-white text-uppercase">OUR Blog</h2>
                          </div>
                          <div class="title-desc mb-40 text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, accusantium id. Rem unde vel ut eaque pariatur?</div>
                      </div><!-- section title end -->
                  </div>
                  <div class="col-md-2"></div>
              </div>
              <div class="row servicess blogss">
                @forelse ($blogs as $blog)
                    <div class="col-12 col-md-6 col-lg-4 col-sm-4 mt-4">
                      <div class="featured-imagebox featured-imagebox-post">
                          <div class="featured-thumbnail">
                              <img class="img-fluid" src="{{ url('images/blog/content') }}/{{ $blog->blog_image }}" alt="" style="max-height: 360px">
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
                          <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-black mb-10" href="{{ route('content_blog_page') }}">Explore More Blogs</a>
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
                              <h2 class="title">HAPPY CLIENTS</h2>
                          </div>
                          <div class="title-desc mb-40 mb-0">Designing spaces that inspire</div>
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
                                          <img style="object-fit: cover" class="img-center" src="{{ url('images/review') }}/{{ $review->client_image }}" alt="testimonial-img">
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
