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
      <h4 class="mb-3">Edit Client Logo</h4>
      <form action="{{ route('clientreview') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <input type="hidden" value="{{ $Client->id }}" name="id">
            <div class="col-md-12 mb-3">
                <label for="client_logo" class="form-label">Client Logo</label>
                <input class="form-control form-control-lg rounded-1  @error('client_logo') is-invalid @enderror" type="file" id="client_logo" name="client_logo">
                @error('client_logo')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <img id="client_logo_p" src="{{ url('images/client/') }}/{{ $Client->client_logo }}" alt="Image Preview" style="max-width: 200px; max-height: 100px;" class="mt-3">
                @section('jss')
                    <script>
                        client_logo.onchange = evt => {
                        const [file] = client_logo.files
                        if (file) {
                            client_logo_p.src = URL.createObjectURL(file)
                        }
                    }
                    </script>
                @endsection
            </div>
            <div class="col-12">
                <div class="d-md-flex align-items-center mt-3">
                    <div class="ms-auto mt-3 mt-md-0">
                        <a href="{{ route('client') }}" class="btn btn-warning font-medium rounded-pill px-4">Back</a>
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
