@extends('backend.master')

@section('content')

<div class="card">
    <div class="card-body">
        @if(Session::has('success'))
        <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
            {{ Session::get('success') }}
        </div>
        @endif
        <h4 class="mb-3">Edit Blog</h4>
        <form action="{{ route('blog_videoupdate') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="{{ $contents->id }}" name="id">
            <div class="mb-3">
                <label for="blog_title" class="control-label mb-1" >Blog Title</label>
                <input type="text" class="form-control @error('blog_title') is-invalid @enderror" value="{{ $contents->blog_title }}" placeholder="Enter Your Title" id="blog_title" name="blog_title"/>
                @error('blog_title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="blog_subtitle" class="control-label mb-1" >Blog Subtitle</label>
                <textarea type="text" class="form-control @error('blog_subtitle') is-invalid @enderror" placeholder="Enter Your Subtitle" id="blog_subtitle" name="blog_subtitle">{{ $contents->blog_subtitle }}</textarea>
                @error('blog_subtitle')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
                @section('jss')
                    <script>
                        ClassicEditor
                            .create( document.querySelector( '#blog_subtitle' ) )
                            .catch( error => {
                                console.error( error );
                            } );
                    </script>
                @endsection
                <div class="col-md-12 mb-3">
                    <label for="video_link" class="form-label">Video Link</label>
                    <input type="text" class="form-control @error('video_link') is-invalid @enderror" value="{{ $contents->video_link }}" placeholder="Enter Your Link" id="video_link" name="video_link"/>
                    @error('video_link')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            <div class="col-12">
                <div class="d-md-flex align-items-center mt-3">
                    <div class="ms-auto mt-3 mt-md-0">
                        <a href="{{ route('blog_video') }}" class="btn btn-warning font-medium rounded-pill px-4">Back</a>
                    </div>
                    <div class="ms-0 ms-md-2 mt-3 mt-md-0">
                        <button type="submit" class="btn btn-info font-medium rounded-pill px-4">
                            <div class="d-flex align-items-center">
                                <i class="ti ti-send me-2 fs-4"></i>
                                Submit
                            </div>
                        </button>
                    </div>
                </div>
        </div>
        </form>
    </div>
  </div>
@endsection
