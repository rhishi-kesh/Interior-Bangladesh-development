@extends('backend.master')

@section('content')
<div class="table-responsive border rounded">
    <div class="card">
        <div class="border-bottom title-part-padding">
          <h4 class="card-title mb-0">Users</h4>
        </div>
        <div class="card-body">
            @if(Session::has('success'))
            <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert">
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                {{ Session::get('success') }}
            </div>
            @endif
            @if(Session::has('delete'))
            <div class="alert alert-danger alert-dismissible bg-danger text-white border-0 fade show" role="alert">
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
                {{ Session::get('delete') }}
            </div>
            @endif
            <div id="editable-datatable_wrapper" class="dataTables_wrapper">
                <div class="dataTables_length" id="editable-datatable_length"></div>
                    <table class="table align-middle text-nowrap mb-0">
                        <thead>
                            <tr>
                            <th scope="col">SL</th>
                            <th scope="col">Profile</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $key => $user)
                            <tr>
                                <td>
                                    <h6 class="fw-semibold mb-0">{{ $users->firstItem() + $key }}</h6>
                                </td>
                                <td>
                                    <img src="{{ empty($user->profile) ? url('images/profile/new/profile.jpg') : url('images/profile/'). '/' .$user->profile }}" alt="" width="50" height="50" style="border-radius: 50%; object-fit: cover;">
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="">
                                            <p class="mb-0">{{ $user->name }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="mb-0">{{ $user->email }}</p>
                                </td>
                                <td>
                                    <p class="mb-0">{{ ($user->role == 0) ? "Admin" : "User" }}</p>
                                </td>
                                <td>
                                    <div class="action-btn">
                                        <a href="{{ route('delete_user', $user->id ) }}" class="text-danger delete ms-2">
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
                </div>
            </div>
        </div>
        <div class="d-flex align-items-center justify-content-end py-2 pe-4 mt-3">
        {{ $users->links() }}
        </div>
  </div>
@endsection
