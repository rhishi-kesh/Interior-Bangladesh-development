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
                            <h1 class="title">{{ __('messages.blog_video') }}</h1>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a href="{{ route('main') }}"><i class="ti ti-home"></i></a>
                            </span>
                            <span class="ttm-bread-sep">&nbsp; / &nbsp;</span>
                            <span class="page-title"><span>{{ __('messages.blog_video') }}</span></span>
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

                    @foreach ($video_blogs as $video_blog)
                        <div class="col-md-4 col-sm-6">
                            <!-- featured-imagebox-post -->
                            <div class="featured-imagebox featured-imagebox-post">
                                <div class="ttm-post-format-video">
                                    @php
                                        $dynamic_link = $video_blog->video_link;
                                        $link = Str::replaceFirst('https://youtu.be', 'https://www.youtube.com/embed', $dynamic_link)
                                    @endphp
                                    <iframe width="560" height="315" src="{{ $link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                                <div class="featured-content featured-content-post">
                                    <div class="post-meta">
                                        <span class="ttm-meta-line"><i class="fa fa-calendar"></i>{{  date ( 'd/M/Y' , strtotime($video_blog->created_at) ) }}</span>
                                    </div>
                                    <div class="post-title featured-title">
                                        <h5><a href="{{ route('singlevideoblog', $video_blog->slug) }}">{{ Str::limit($video_blog->blog_title, 50, '...') }}</a></h5>
                                    </div>
                                </div>
                            </div><!-- featured-imagebox-post end-->
                        </div>
                    @endforeach
                </div>
                {{ $video_blogs->links() }}
            </div>
        </div>
    </div>
    <!--site-main end-->
@endsection