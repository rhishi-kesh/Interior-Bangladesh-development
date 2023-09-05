@extends('backend.master')

@section('content')

<div class="card">
    <div class="card-body">
      <h4 class="mb-3">Edit Your Slide</h4>
      <form action="{{ route('updateslide') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <input type="hidden" value="{{ $slide->id }}" name="id">
            <div class="col-md-12 mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" value="{{ $slide->title }}" class="form-control form-control-lg rounded-1 @error('title') is-invalid @enderror" name="title" id="title" placeholder="Enter Title here">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="btn-link" class="form-label">Btn Link</label>
                <input type="text" value="{{ $slide->btn_link }}" class="form-control  form-control-lg rounded-1 @error('btn_link') is-invalid @enderror" id="btn-link" name="btn_link" placeholder="Btn Link" >
                @error('btn_link')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
          <div class="col-md-6 mb-3">
                <label for="btn-text" class="form-label">Btn Text</label>
                <input type="text" value="{{ $slide->btn_text }}" class="form-control  form-control-lg rounded-1  @error('btn_text') is-invalid @enderror" id="btn-text" name="btn_text" placeholder="Btn Text" >
                @error('btn_text')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-12 mb-3">
                <label for="formFile" class="form-label">Select Background Image</label>
                <input class="form-control form-control-lg rounded-1  @error('bg_image') is-invalid @enderror" type="file" id="imgInp" name="bg_image">
                @error('bg_image')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <img id="blah" src="{{ url('images/slider/') }}/{{ $slide->background }}" alt="Image Preview" style="max-width: 200px; max-height: 100px;" class="mt-3">
            </div>
          <div class="col-md-12 mb-3">
            <label for="subtitle" class="form-label">Subtitle</label>
            <textarea name="subtitle" rows="10" class="ckeditor form-control @error('subtitle') is-invalid @enderror" id="subtitle">{{  $slide->subtitle }}</textarea>
            @error('subtitle')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
          <div class="col-12">
            <div class="d-md-flex align-items-center mt-3">
              <div class="ms-auto mt-3 mt-md-0">
                <button type="submit" class="btn btn-info font-medium rounded-pill px-4">
                  <div class="d-flex align-items-center">
                    <i class="ti ti-send me-2 fs-4"></i>
                    Submit
                  </div>
                </button>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
  @section('jss')
  <script>
      imgInp.onchange = evt => {
      const [file] = imgInp.files
      if (file) {
      blah.src = URL.createObjectURL(file)
      }
  }
  </script>
@endsection
@endsection
