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
      <h4 class="mb-3">Add Our Gallery Image</h4>
      <form action="{{ route('addimagepost') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-12 mb-3">
                <label for="gallery_image" class="form-label">Image</label>
                <input class="form-control form-control-lg rounded-1  @error('gallery_image') is-invalid @enderror" type="file" id="gallery_image" name="gallery_image">
                @error('gallery_image')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <img id="gallery_image_p" src="#" alt="Image Preview" style="max-width: 200px; max-height: 100px;" class="mt-3">
                @section('jss')
                    <script>
                        gallery_image.onchange = evt => {
                        const [file] = gallery_image.files
                        if (file) {
                            gallery_image_p.src = URL.createObjectURL(file)
                        }
                    }
                    </script>
                @endsection
            </div>
            <div class="col-md-12 mb-3">
                <select name="gallery_categorys" id="gallery_categorys" class="form-control form-control-lg rounded-1  @error('gallery_categorys') is-invalid @enderror">
                    <option value="">Select Category</option>
                    @foreach ($gallery_categorys as $gallery_category)
                        <option value="{{ $gallery_category->id }}">{{ $gallery_category->category_name }}</option>
                    @endforeach
                </select>
                @error('gallery_categorys')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-12">
                <div class="d-md-flex align-items-center mt-3">
                    <div class="ms-auto mt-3 mt-md-0">
                        <input type="reset" class="btn btn-danger font-medium rounded-pill px-4" value="Reset Form">
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
