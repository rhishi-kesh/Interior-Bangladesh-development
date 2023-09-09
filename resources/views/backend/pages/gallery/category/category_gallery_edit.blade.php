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
      <h4 class="mb-3">Edit Member Information</h4>
      <form action="{{ route('updateteam') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <input type="hidden" value="{{ $team->id }}" name="id">
            <div class="col-md-6 mb-3">
                <label for="member_name" class="form-label">Member Name</label>
                <input type="text" value="{{ $team->member_name }}" class="form-control form-control-lg rounded-1 @error('member_name') is-invalid @enderror" name="member_name" id="member_name" placeholder="Enter Member Name">
                @error('member_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="position" class="form-label">Member Position</label>
                <input name="position" value="{{ $team->position }}" rows="5" class="ckeditor form-control @error('position') is-invalid @enderror" id="position" placeholder="Enter Member Position">
                @error('position')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-12 mb-3">
                <label for="team_image" class="form-label">Select Member Photo</label>
                <input class="form-control form-control-lg rounded-1  @error('team_image') is-invalid @enderror" type="file" id="team_image" name="team_image">
                @error('team_image')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <img id="team_image_p" src="{{ url('images/team/') }}/{{ $team->team_image }}" alt="Image Preview" style="max-width: 200px; max-height: 100px;" class="mt-3">
                @section('jss')
                    <script>
                        team_image.onchange = evt => {
                        const [file] = team_image.files
                        if (file) {
                            team_image_p.src = URL.createObjectURL(file)
                        }
                    }
                    </script>
                @endsection
            </div>
            <div class="col-12">
                <div class="d-md-flex align-items-center mt-3">
                    <div class="ms-auto mt-3 mt-md-0">
                        <a href="{{ route('team') }}" class="btn btn-warning font-medium rounded-pill px-4">Back</a>
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
