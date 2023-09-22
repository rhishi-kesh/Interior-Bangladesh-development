@extends('backend.master')

@section('content')
@if(Session::has('delete'))
    <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        {{ Session::get('delete') }}
    </div>
@endif
<div class="product-list">
    <div class="card">
      <div class="card-body p-3">
        <h4 class="text-uppercase mb-3">contact&nbsp; page&nbsp; massage</h4>
        <div class="d-flex justify-content-between align-items-center mb-9">
          <form class="position-relative" action="{{ route('contactsearch') }}" method="GET">
                <input type="search" name="search" value="{{ (isset($search) ? $search : '') }}" class="form-control search-chat py-2 ps-5" id="text-srh" placeholder="Search Massage">
                <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
          </form>
        </div>
        <div class="table-responsive border rounded">
          <table class="table align-middle text-nowrap mb-0">
            <thead>
              <tr>
                <th scope="col">SL</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Number</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($massagess as $key => $massages)
                <tr>
                    <td>
                        <h6 class="fw-semibold mb-0">{{ $massagess->firstItem() + $key }}</h6>
                    </td>
                    <td>
                        <div class="d-flex align-items-center">
                            <div class="">
                                <p class="mb-0">{{ $massages->name }}</p>
                            </div>
                        </div>
                    </td>
                    <td>
                        <p class="mb-0">{{ $massages->email }}</p>
                    </td>
                    <td>
                        <p class="mb-0">{{ $massages->phone }}</p>
                    </td>
                    <td>
                        <div class="action-btn">
                            <button class="text-success show border-0" style="background: transparent;" data-bs-toggle="modal"
                            data-bs-target="#bs-example-modal-xlg{{ $massages->id }}">
                                <i class="ti ti-eye fs-5"></i>
                            </button>
                            <a href="mailto: {{ $massages->email }}" class="text-info send ms-2">
                                <i class="ti ti-mail fs-5"></i>
                            </a>
                            <a href="{{ route('deleteMassage', $massages->id ) }}" class="text-danger delete ms-2" onclick="return confirm('Are you sure you want to delete?')">
                                <i class="ti ti-trash fs-5"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                <div class="modal fade" id="bs-example-modal-xlg{{ $massages->id }}">
                    <div class="modal-dialog modal-xl">
                      <div class="modal-content">
                        <div class="modal-header d-flex align-items-center">
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <h4>{{ $massages->name }}</h4>
                          <p><span>{{ $massages->email }} </span> | <span>{{ $massages->phone }} | <span>{{  date ( 'H:i:s/D/M/Y' , strtotime($massages->created_at) ) }}</span></p>
                          <p>{{ $massages->massage }}</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-light-danger text-danger font-medium waves-effect text-start" data-bs-dismiss="modal">
                            Close
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                @empty
                    <tr>
                        <td colspan="50">No Massage Found</td>
                    </tr>
                @endforelse
            </tbody>
          </table>
          <div class="d-flex align-items-center justify-content-end py-2 pe-4 mt-3">
            {{ $massagess->links() }}
          </div>
        </div>
      </div>
    </div>
</div>
<div class="product-list">
    <div class="card">
      <div class="card-body p-3">
        @if(Session::has('delete'))
        <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
            {{ Session::get('delete') }}
        </div>
        @endif
        <h4 class="text-uppercase">Newsletter &nbsp;Subscribers</h4>
        <div class="table-responsive border rounded">
          <table class="table align-middle text-nowrap mb-0">
            <thead>
              <tr>
                <th scope="col">SL</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($newsletters as $key => $newsletter)
                <tr>
                    <td>
                        <h6 class="fw-semibold mb-0">{{ $newsletters->firstItem() + $key }}</h6>
                    </td>
                    <td>
                        <p class="mb-0">{{ $newsletter->gmail }}</p>
                    </td>
                    <td>
                        <div class="action-btn">
                            <a href="mailto: {{ $newsletter->gmail }}" class="text-info send ms-2">
                                <i class="ti ti-mail fs-5"></i>
                            </a>
                            <a href="{{ route('newsletterdelete', $newsletter->id ) }}" class="text-danger delete ms-2" onclick="return confirm('Are you sure you want to delete?')">
                                <i class="ti ti-trash fs-5"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                @empty
                    <tr>
                        <td colspan="50">No Massage Found</td>
                    </tr>
                @endforelse
            </tbody>
          </table>
          <div class="d-flex align-items-center justify-content-end py-2 pe-4 mt-3">
            {{ $newsletters->links() }}
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
