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
      <h4 class="mb-3">About us</h4>
      <form action="{{ route('updateabout') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-12 mb-3">
                <label for="why_choose_us" class="form-label">Why Choose Us</label>
                <textarea class="form-control form-control-lg rounded-1 @error('why_choose_us') is-invalid @enderror" name="why_choose_us" id="why_choose_us" placeholder="Why Choose Us" rows="5"></textarea>
                @error('why_choose_us')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-12 mb-3">
                <label for="choose_us_image" class="form-label">Select Why Choose Us Image</label>
                <input class="form-control form-control-lg rounded-1  @error('choose_us_image') is-invalid @enderror" type="file" id="choose_us_image" name="choose_us_image">
                @error('choose_us_image')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <img id="choose_us_image_p" src="#" alt="Image Preview" style="max-width: 200px; max-height: 100px;" class="mt-3">
            </div>
            <div class="col-md-12 mb-3">
                <label for="mission" class="form-label">Our Mission</label>
                <textarea class="form-control form-control-lg rounded-1 @error('mission') is-invalid @enderror" name="mission" id="mission" placeholder="Our Mission" rows="5">{{ old('mission') }}</textarea>
                @error('mission')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-12 mb-3">
                <label for="mission_image" class="form-label">Select Our Mission Image</label>
                <input class="form-control form-control-lg rounded-1  @error('mission_image') is-invalid @enderror" type="file" id="mission_image" name="mission_image">
                @error('mission_image')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <img id="mission_image_p" src="#" alt="Image Preview" style="max-width: 200px; max-height: 100px;" class="mt-3">
            </div>
            <div class="col-md-12 mb-3">
                <label for="vision" class="form-label">Our Vision</label>
                <textarea  class="form-control form-control-lg rounded-1 @error('vision') is-invalid @enderror" name="vision" id="our_vision" placeholder="Our Vision" rows="5">{{ old('vision') }}</textarea>
                @error('vision')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-12 mb-3">
                <label for="our_vision_image" class="form-label">Select Our Vision Image</label>
                <input class="form-control form-control-lg rounded-1  @error('our_vision_image') is-invalid @enderror" type="file" id="our_vision_image" name="our_vision_image">
                @error('our_vision_image')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <img id="our_vision_image_p" src="#" alt="Image Preview" style="max-width: 200px; max-height: 100px;" class="mt-3">
            </div>
            <div class="col-md-6 mb-3">
                <label for="project_c" class="form-label">Number Of Projects Completed</label>
                <input type="text" value="" class="form-control form-control-lg rounded-1 @error('project_c') is-invalid @enderror" name="project_c" id="project_c" placeholder="Projects Completed">
                @error('project_c')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="ongoing_p" class="form-label">Number Of Ongoing Projects</label>
                <input type="text" value="" class="form-control form-control-lg rounded-1 @error('ongoing_p') is-invalid @enderror" name="ongoing_p" id="ongoing_p" placeholder="Ongoing Projects">
                @error('ongoing_p')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="employed" class="form-label">Number Of Work Employed</label>
                <input type="text" value="" class="form-control form-control-lg rounded-1 @error('employed') is-invalid @enderror" name="employed" id="employed" placeholder="Work Employed">
                @error('employed')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="experiance" class="form-label">Number Of Years Experiance</label>
                <input type="text" value="" class="form-control form-control-lg rounded-1 @error('experiance') is-invalid @enderror" name="experiance" id="experiance" placeholder="Years Experiance">
                @error('experiance')
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
            mission_image.onchange = evt => {
            const [file] = mission_image.files
            if (file) {
                mission_image_p.src = URL.createObjectURL(file)
            }
        }
        </script>
        <script>
            choose_us_image.onchange = evt => {
            const [file] = choose_us_image.files
            if (file) {
                choose_us_image_p.src = URL.createObjectURL(file)
            }
        }
        </script>
        <script>
            our_vision_image.onchange = evt => {
            const [file] = our_vision_image.files
            if (file) {
                our_vision_image_p.src = URL.createObjectURL(file)
            }
        }
        </script>
    @endsection
@endsection
