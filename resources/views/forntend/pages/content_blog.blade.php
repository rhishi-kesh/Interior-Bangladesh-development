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
                            <h1 class="title">{{ __('messages.blog_content') }}</h1>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a href="{{ route('main') }}"><i class="ti ti-home"></i></a>
                            </span>
                            <span class="ttm-bread-sep">&nbsp; / &nbsp;</span>
                            <span class="page-title"><span>{{ __('messages.blog_content') }}</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page-title-end -->

    <!--site-main start-->
    <div class="site-main">
        <div class="ttm-row pb-70 ttm-bgcolor-grey clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-title clearfix">
                            <div class="title-header sm-fixd-title">
                                <h2 class="title text-uppercase">{{ __('messages.blog_title') }}</h2>
                            </div>
                        </div>
                    </div>
                    @foreach ($content_blogs as $content_blog)
                        <div class="col-md-4 col-sm-6">
                            <!-- featured-imagebox-post -->
                            <div class="featured-imagebox featured-imagebox-post">
                                <div class="featured-thumbnail">
                                    <img class="img-fluid" src="{{ url('images/blog/content') }}/{{ $content_blog->blog_image }}" alt="" style="width: 100%; height: 300px; object-fit: cover; object-position: center center;">
                                </div>
                                <div class="featured-content featured-content-post">
                                    <div class="post-meta">
                                        <span class="ttm-meta-line"><i class="fa fa-calendar"></i>{{  date ( 'd/M/Y' , strtotime($content_blog->created_at) ) }}</span>
                                    </div>
                                    <div class="post-title featured-title">
                                        <h5><a href="{{ route('singlecontentblog', $content_blog->slug) }}">{{ Str::limit($content_blog->blog_title, 50, '...') }}</a></h5>
                                    </div>
                                </div>
                            </div><!-- featured-imagebox-post end -->
                        </div>
                    @endforeach
                </div>
                {{ $content_blogs->links() }}
            </div>
        </div>
    </div>
    <!--site-main end-->
@endsection
