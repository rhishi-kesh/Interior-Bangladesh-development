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
      <h4 class="mb-3">Update Review</h4>
      <form action="{{ route('updatereview') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <input type="hidden" value="{{ $review->id }}" name="id">
          <div class="col-md-6 mb-3">
                <label for="client_name" class="form-label">Client Name</label>
                <input type="text" value="{{ $review->client_name }}" class="form-control form-control-lg rounded-1 @error('client_name') is-invalid @enderror" name="client_name" id="client_name" placeholder="Enter Client Name">
                @error('client_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
          <div class="col-md-6 mb-3">
                <label for="client_place" class="form-label">City</label>
                <input type="text" value="{{ $review->client_city }}" class="form-control form-control-lg rounded-1 @error('client_place') is-invalid @enderror" name="client_place" id="client_place" placeholder="Enter City Name">
                @error('client_place')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="client_photo" class="form-label">Select Client Photo</label>
                <input class="form-control form-control-lg rounded-1  @error('client_photo') is-invalid @enderror" type="file" id="client_photo" name="client_photo">
                @error('client_photo')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <img id="client_photo_p" src="{{ url('images/review/') }}/{{ $review->client_image }}" alt="Image Preview" style="max-width: 200px; max-height: 100px;" class="mt-3">
                @section('jss')
                    <script>
                        client_photo.onchange = evt => {
                        const [file] = client_photo.files
                        if (file) {
                            client_photo_p.src = URL.createObjectURL(file)
                        }
                    }
                    </script>
                @endsection
            </div>
            <div class="col-md-6 mb-3">
                <label for="video_speech" class="form-label">Client Video Speech</label>
                <input type="url" value="{{ ($review->client_video_speech == '') ? '' : $review->client_video_speech }}" class="form-control form-control-lg rounded-1 @error('video_speech') is-invalid @enderror" name="video_speech" id="video_speech" placeholder="{{ ($review->client_video_speech == '') ? 'Video Url Not Provide' : $review->client_video_speech }}">
                @error('video_speech')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
          <div class="col-md-12 mb-3">
            <label for="client_speech" class="form-label">Client Speech</label>
            <textarea name="client_speech" rows="5" class="ckeditor form-control @error('client_speech') is-invalid @enderror" id="client_speech" placeholder="Enter Client Speech">{{ $review->client_speech }}</textarea>
            @error('client_speech')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
          <div class="col-12">
            <div class="d-md-flex align-items-center mt-3">
                <div class="ms-auto mt-3 mt-md-0">
                    <a href="{{ route('review') }}" class="btn btn-warning font-medium rounded-pill px-4">Back</a>
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
        </div>
      </form>
    </div>
  </div>
@endsection
