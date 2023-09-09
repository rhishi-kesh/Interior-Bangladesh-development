@extends('backend.master')

@section('content')

<div class="card">
    <div class="border-bottom title-part-padding d-flex justify-content-between">
      <h4 class="card-title mb-0">Category</h4>
      <div>
        <button type="button" class="justify-content-center w-100 btn mb-1 btn-primary d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#samedata-modal" data-bs-whatever="@mdo">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-folder-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M12 19h-7a2 2 0 0 1 -2 -2v-11a2 2 0 0 1 2 -2h4l3 3h7a2 2 0 0 1 2 2v3.5"></path>
                <path d="M16 19h6"></path>
                <path d="M19 16v6"></path>
             </svg>
             <span class="ms-2">Add Category</span>
        </button>
      </div>
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
      <div id="editable-datatable_wrapper" class="dataTables_wrapper"><div class="dataTables_length" id="editable-datatable_length"></div><table class="table table-striped table-bordered dataTable" id="editable-datatable" style="cursor: pointer;" aria-describedby="editable-datatable_info">
        <thead>
          <tr>
            <th class="sorting sorting_asc" tabindex="0" aria-controls="editable-datatable" rowspan="1" colspan="1" style="width: 148.217px;" aria-sort="ascending">SL</th>
            <th class="sorting" tabindex="0" aria-controls="editable-datatable" rowspan="1" colspan="1" style="width: 227.2px;">Member Name</th>
            <th class="sorting" tabindex="0" aria-controls="editable-datatable" rowspan="1" colspan="1" style="width: 227.2px;">Member Position</th>
            <th class="sorting" tabindex="0" aria-controls="editable-datatable" rowspan="1" colspan="1" style="width: 92.417px;">Action</th>
        </tr>
        </thead>
        <tbody>
        {{-- @forelse ($teams as $key => $team) --}}
            <tr id="7" class="gradeA odd">
                <td tabindex="1" class="sorting_1">{{-- $teams->firstItem()+$key --}}</td>
                <td tabindex="1">{{-- Str::limit($team->member_name,50,'...') --}}</td>
                <td tabindex="1">{{-- Str::limit($team->position,50,'...') --}}</td>
                <td tabindex="1">
                    <a class="btn waves-effect waves-light btn-success mt-2" href="{{-- route('teamedit',$team->id) --}}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit-circle" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M12 15l8.385 -8.415a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3z"></path>
                            <path d="M16 5l3 3"></path>
                            <path d="M9 7.07a7 7 0 0 0 1 13.93a7 7 0 0 0 6.929 -6"></path>
                        </svg>
                        Edit
                    </a>
                    <a class="btn waves-effect waves-light btn-danger mt-2" href="{{-- route('teamdelete',$team->id) --}}" onclick="return confirm('Are you sure you want to delete?')">
                        <i class="ti ti-trash fs-5"></i>
                        Delete
                    </a>
                </td>
            </tr>
        {{-- @empty
            <tr>
                <td colspan="20">No Data Found</td>
            </tr>
        @endforelse --}}
        </tbody>
      </table>
      {{-- $teams->links() --}}
      <div class="modal fade" id="samedata-modal">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header d-flex align-items-center">
                    <h4 class="modal-title" id="exampleModalLabel1">
                       Add Category
                    </h4>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    ></button>
                    </div>
                    <div class="modal-body">
                    <form>
                        <div class="mb-3">
                        <label
                            for="recipient-name"
                            class="control-label"
                            >Recipient:</label
                        >
                        <input type="text" class="form-control" id="recipient-name1"/>
                    </div>
                    </form>
                    </div>
                    <div class="modal-footer">
                    <button
                        type="button"
                        class="btn btn-light-danger text-danger font-medium"
                        data-bs-dismiss="modal"
                    >
                        Close
                    </button>
                    <button type="button" class="btn btn-success">
                        Send message
                    </button>
                    </div>
                </div>
            </div>
        </div>

@endsection
