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
                            <h1 class="title">Gallery</h1>
                        </div>
                        <div class="breadcrumb-wrapper">
                            <span>
                                <a href="{{ route('main') }}"><i class="ti ti-home"></i></a>
                            </span>
                            <span class="ttm-bread-sep">&nbsp; / &nbsp;</span>
                            <span class="page-title"><span>Gallery</span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- page-title-end -->

    <!-- site-main -->
    <div class="site-main">
        <section class="text-center gallery-images pb-90">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8">
                        <div class="title-header">
                            <h2 class="title mb-0 text-uppercase">Our Gallery</h2>
                        </div>
                        <p>Lorem, ipsum dolor sit, amet consectetur adipisicing elit. Quod itaque laudantium, nihil et mollitia non. Necessitatibus, itaque!</p>
                    </div>
                </div>
                <div class="row mb-15 mt-2 mb-5" id="lightgallery">
                    <div class="col item-menu">
                        <button class="btn" data-filter="">All</button>
                        @forelse ($categorys as $category)
                            <button class="btn" data-filter=".item{{ $category->id }}">{{ $category->category_name }}</button>
                        @empty
                            <div>No Category found</div>
                        @endforelse

                    </div>
                </div>
                <div class="row mt-5 item-alls" id="rhishi">
                    @foreach ($categorys as $category2)
                        @foreach (App\Models\GalleryImage::where('gallery_category_id', $category2->id)->get() as $gallery_img)
                            <div class="col-md-4 mt-4 item item{{ $category2->id }}" data-sub-html="<h3 class='text-uppercase text-white mb-0'>{{ $category2->category_name }}</h3>" data-src="{{ url('images/gallery') }}/{{ $gallery_img->gallery_image }}">
                                <img src="{{ url('images/gallery').'/'.$gallery_img->gallery_image }}" alt="img" class="img-fluid rounded" style="width: 100%; height: 300px; object-fit: cover; object-position: center center;">
                            </div>
                        @endforeach
                    @endforeach

                </div>
            </div>
        </section>
    </div>
    <!-- site-main-end -->
@endsection
