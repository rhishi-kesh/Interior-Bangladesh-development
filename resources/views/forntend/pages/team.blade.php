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
                            <h1 class="title">{{ __('messages.team') }}</h1>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a href="{{ route('main') }}"><i class="ti ti-home"></i></a>
                            </span>
                            <span class="ttm-bread-sep">&nbsp; / &nbsp;</span>
                            <span class="page-title"><span>{{ __('messages.team') }}</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page-title-end -->

    <!--site-main start-->
    <div class="site-main">
        <section class="element-row element-style pb-80 our-team">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title clearfix">
                            <div class="title-header sm-fixd-title">
                                <h2 class="title text-uppercase">{{ __('messages.team_title') }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row teams">
                    @forelse ($teams as $team)
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="featured-imagebox featured-imagebox-team ttm-team-box-view-overlay box-shadow2 mb-30">
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

                    @endforelse

                </div>
            </div>
        </section>
    </div>
    <!--site-main end-->
@endsection
