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
      <h4 class="mb-3">Edit Your Service</h4>
      <form action="{{ route('updateservice') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <input type="hidden" name="id" value="{{ $service->id }}">
            <div class="col-md-12 mb-3">
                <label for="service_name" class="form-label">Service Name</label>
                <input type="text" value="{{ $service->service_name }}" class="form-control form-control-lg rounded-1 @error('service_name') is-invalid @enderror" name="service_name" id="service_name" placeholder="Enter Service Name">
                @error('service_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-12 mb-3">
                <label for="service_subtitle" class="form-label">Service SubTitle</label>
                <textarea name="service_subtitle" rows="5" class="ckeditor form-control @error('service_subtitle') is-invalid @enderror" id="service_subtitle" placeholder="Enter Service Title">{{ $service->service_subtitle }}</textarea>
                @error('service_subtitle')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-12 mb-3">
                <label for="service_image" class="form-label">Select Service Image</label>
                <input class="form-control form-control-lg rounded-1  @error('service_image') is-invalid @enderror" type="file" id="service_image" name="service_image">
                @error('service_image')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <img id="service_image_p" src="{{ url('images/service/') }}/{{ $service->service_image }}" alt="Image Preview" style="max-width: 200px; max-height: 100px;" class="mt-3">
                @section('jss')
                    <script>
                        service_image.onchange = evt => {
                        const [file] = service_image.files
                        if (file) {
                            service_image_p.src = URL.createObjectURL(file)
                        }
                    }
                    </script>
                    <script>
                        ClassicEditor
                            .create( document.querySelector( '#service_subtitle' ) )
                            .catch( error => {
                                console.error( error );
                            } );
                    </script>
                @endsection
            </div>
            <div class="col-12">
                <div class="d-md-flex align-items-center mt-3">
                    <div class="ms-auto mt-3 mt-md-0">
                        <a href="{{ route('services') }}" class="btn btn-warning font-medium rounded-pill px-4">Back</a>
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
