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
                            <h1 class="title">Blog title</h1>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a title="Homepage" href="index.html"><i class="ti ti-home"></i></a>
                            </span>
                            <span class="ttm-bread-sep">&nbsp; / &nbsp;</span>
                            <span class="page-title"><span>Blog</span></span>
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
                                <div class="post-featured">
                                    <img class="img-fluid" src="{{ url('images/blog/content') }}/{{ $content_blog->blog_image }}" alt="" class="single-blog-img">
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
                                                <span class="ml-2"> {{  date ( 'd/M/Y' , strtotime($content_blog->created_at) ) }}</span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="ttm-box-desc-text">
                                        <h2 class="title text-uppercase text-center text-md-left">{{ $content_blog->blog_title }}</h2>
                                        <p>{!! $content_blog->blog_subtitle !!}</p>
                                        <div class="ttm-social-share-wrapper">
                                            <div class="social-icons circle text-right">
                                                <ul>
                                                    <li>
                                                        <a href="aa" target="_blank">
                                                            <i class="fa fa-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li><a href="" target="_blank"><i class="fa fa-twitter" target="_blank"></i></a></li>
                                                    <li><a href="" target="_blank"><i class="fa fa-google-plus" target="_blank"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="ttm-post-prev-next-buttons clearfix">
                                            <a class="ttm-btn ttm-btn-size-sm ttm-btn-shape-square ttm-icon-btn-left ttm-btn-style-fill ttm-btn-bgcolor-skincolor" href="#"><i class="ti ti-angle-double-left"></i>Previous</a>
                                            <a class="ttm-btn ttm-btn-size-sm ttm-btn-shape-square ttm-icon-btn-right ttm-btn-style-fill ttm-btn-bgcolor-skincolor float-right" href="#"><i class="ti ti-angle-double-right"></i>Next</a>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- ttm-blog-classic-box-content end -->
                        </article><!-- post end -->
                    </div>
                    <div class="col-lg-3 widget-area sidebar-right ttm-col-bgcolor-yes ttm-bg ttm-right-span ttm-bgcolor-grey">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                        <aside class="widget widget-recent-post">
                            <h3 class="widget-title">Recent  posts</h3>
                            <ul class="ttm-recent-post-list">
                                @foreach ($recent_posts as $recent_post)
                                    <li class="ttm-recent-post-list-li clearfix">
                                        <a href="{{ route('singlecontentblog', $recent_post->slug) }}"><img class="img-fluid" src="{{ url('images/blog/content') }}/{{ $recent_post->blog_image }}" alt="blog-img"></a>
                                        <span class="post-date">{{  date ( 'd/M/Y' , strtotime($recent_post->created_at) ) }}</span>
                                        <a href="{{ route('singlecontentblog', $recent_post->slug) }}">{{ Str::limit($recent_post->blog_title, 28, '...') }}</a>
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
