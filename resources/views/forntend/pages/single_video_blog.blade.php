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
                            <h1 class="title">{{ $video_blogs->blog_title }}</h1>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="{{ route('main') }}"><i class="ti ti-home"></i></a>
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
    <div class="site-main single">
        <!-- sidebar -->
        <div class="single-blog sidebar ttm-sidebar-right ttm-bgcolor-white break-991-colum clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-9 content-area">
                        <!-- post -->
                        <article class="post ttm-blog-classic">
                            <!-- post-featured-wrapper -->
                            <div class="post-featured-wrapper">
                                <div class="ttm-post-format-video">
                                    @php
                                        $dynamic_link = $video_blogs->video_link;
                                        $link = Str::replaceFirst('https://youtu.be', 'https://www.youtube.com/embed', $dynamic_link)
                                    @endphp
                                    <iframe width="560" height="200" src="{{ $link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                </div>
                            </div>
                            <!-- post-featured-wrapper end -->
                            <!-- ttm-blog-classic-box-content -->
                            <div class="ttm-blog-classic-box-content">
                                <div class="entry-content">
                                    <div class="ttm-entry-meta-wrapper">
                                        <div class="ttm-entry-meta">
                                            <span class="ttm-meta-line comments-link">
                                                <i class="fa fa-calendar"></i>
                                                <span class="ml-2">{{  date ( 'd/M/Y' , strtotime($video_blogs->created_at) ) }}</span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="ttm-box-desc-text">
                                        <h2 class="title text-uppercase text-center text-md-left">{{ $video_blogs->blog_title }}</h2>
                                        <p>{!! $video_blogs->blog_subtitle !!}</p>
                                        <div class="ttm-social-share-wrapper">
                                            <div class="social-icons circle text-right">
                                                <ul>
                                                    <li><a href="https://www.facebook.com/bangladeshinterior"><i class="fa fa-facebook"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-instagram"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-youtube-play"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="fa fa-linkedin"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- ttm-blog-classic-box-content end -->
                        </article>
                    </div>
                    <div class="col-lg-3 widget-area sidebar-right ttm-col-bgcolor-yes ttm-bg ttm-right-span ttm-bgcolor-grey">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                        <aside class="widget widget-recent-post">
                            <h3 class="widget-title">{{ __('messages.recent_post') }}</h3>
                            <ul class="ttm-recent-post-list">
                                @foreach ($recent_posts as $recent_post)
                                    <li class="ttm-recent-post-list-li clearfix">
                                        @php
                                            $dynamic_link = $recent_post->video_link;
                                            $link = Str::replaceFirst('https://youtu.be', 'https://www.youtube.com/embed', $dynamic_link)
                                        @endphp
                                        <iframe width="200px" height="100" src="{{ $link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                        <span class="post-date">{{  date ( 'd/M/Y' , strtotime($recent_post->created_at) ) }}</span>
                                        <a href="{{ route('singlevideoblog', $recent_post->slug) }}">{{ Str::limit($recent_post->blog_title, 28, '...') }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </aside>
                    </div>
                </div><!-- row end -->
            </div>
        </div>
        <!-- sidebar end -->
    </div>
@endsection
